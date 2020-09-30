<?php

namespace TexLab\Html;

class Input extends AbstractTag
{
    use ValueTrait;
    use NameTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;

    /**
     * @var string
     */
    protected $type = "text";

    /**
     * @var string
     */
    protected $checked = '';

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type = "text")
    {
        if (
            in_array(
                $type,
                [
                'button',
                'checkbox',
                'file',
                'hidden',
                'image',
                'password',
                'radio',
                'reset',
                'submit',
                'text',
                'color',
                'date',
                'datetime',
                'datetime-local',
                'email',
                'number',
                'range',
                'search',
                'tel',
                'time',
                'url',
                'month',
                'week'
                ]
            )
        ) {
            $this->type = $type;
        }
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setChecked(bool $value)
    {
        if (in_array($this->type, ['radio', 'checkbox']) && $value) {
            $this->checked = " checked";
        }
        return $this;
    }

    public function html(): string
    {
        return "<input type='$this->type'" .
            $this->value .
            $this->name .
            $this->style .
            $this->class .
            $this->id .
            $this->placeholder .
            $this->checked .
            $this->required .
            $this->disabled .
            $this->tabIndex .
            ">";
    }
}
