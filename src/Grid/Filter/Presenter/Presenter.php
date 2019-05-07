<?php

namespace Encore\Admin\Grid\Filter\Presenter;

use Encore\Admin\Grid\Filter\AbstractFilter;

abstract class Presenter
{
    /**
     * @var AbstractFilter
     */
    protected $filter;

    protected $bLabel = true;

    /**
     * Set parent filter.
     *
     * @param AbstractFilter $filter
     */
    public function setParent(AbstractFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @see https://stackoverflow.com/questions/19901850/how-do-i-get-an-objects-unqualified-short-class-name
     *
     * @return string
     */
    public function view() : string
    {
        $reflect = new \ReflectionClass(get_called_class());

        return 'admin::filter.'.strtolower($reflect->getShortName());
    }

    /**
     * Set default value for filter.
     *
     * @param $default
     *
     * @return $this
     */
    public function default($default)
    {
        $this->filter->default($default);

        return $this;
    }

    /**
     * Blade template variables for this presenter.
     *
     * @return array
     */
    public function variables() : array
    {
        return [];
    }

    public function isLabel()
    {
        return $this->bLabel;
    }

    public function disableLabel()
    {
        $this->bLabel = false;

        return $this;
    }

    protected $labelWidth = 1;
    public function getLabelWidth() {
        return $this->labelWidth;
    }

    public function setLabelWidth($n) {
        $this->labelWidth = $n;
        return $this;
    }

    protected $labelPixelWidth = 0;
    public function getLabelPixelWidth() {
        return $this->labelPixelWidth;
    }

    public function setLabelPixelWidth($n) {
        $this->labelPixelWidth = $n;
        return $this;
    }

    protected $pixelWidth = 0;
    public function getPixelWidth() {
        return $this->pixelWidth;
    }

    public function setPixelWidth($n) {
        $this->pixelWidth = $n;
        return $this;
    }
    protected $width = 8;
    public function getWidth() {
        return $this->width;
    }
    public function setWidth($n) {
        $this->width = $n;
        return $this;
    }
}
