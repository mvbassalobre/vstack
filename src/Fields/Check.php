<?php

namespace marcusvbda\vstack\Fields;

class Check extends Field
{
    public $options = [];
    public function __construct($op = [])
    {
        $this->options = $op;
        $this->options["type"] = "check";
        parent::processFieldOptions();
    }

    public function getView()
    {
        if (@$this->options["hide"]) return $this->view = "";

        $label          = $this->options["label"];
        $field          = $this->options["field"];
        $active_color   = @$this->options["active_color"] ? $this->options["active_color"] : "green";
        $inactive_color = @$this->options["inactive_color"] ? $this->options["inactive_color"] : "red";
        $active_text    = @$this->options["active_text"] ? $this->options["active_text"] : "";
        $inactive_text  = @$this->options["inactive_text"] ? $this->options["inactive_text"] : "";
        $disabled       = @$this->options["disabled"] ? "true" : "false";
        $description    = @$this->options["description"];

        return $this->view = view("vStack::resources.field.check", compact(
            "label",
            "description",
            "disabled",
            "field",
            "active_color",
            "inactive_color"
        ))->render();
    }
}
