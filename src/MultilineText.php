<?php

namespace Orlyapps\NovaMultilineText;

use Laravel\Nova\Fields\Text;

class MultilineText extends Text
{
    public $highlightFirst = true;
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-multiline-text';

    public function highlightFirst($flag = true)
    {
        $this->highlightFirst = $flag;
        return $this;
    }

    public function meta()
    {
        $this->meta = parent::meta();
        return array_merge([
            'highlightFirst' => $this->highlightFirst,
        ], $this->meta);
    }
}
