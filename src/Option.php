<?php

namespace TexLab\Html;

class Option extends AbstractTag
{
    use InnerTextTrait;
    use ValueTrait;

    /**
     * @var string
     */
    protected $selected = '';

    /**
     * @param bool $selected
     * @return $this
     */
    public function selected(bool $selected = true)
    {
        $this->selected = $selected ? ' selected' : '';

        return $this;
    }

    public function html(): string
    {
        return "<option$this->attrStyle$this->class$this->attrId$this->value$this->selected>$this->innerText</option>";
    }
}
