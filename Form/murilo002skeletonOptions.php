<?php
class murilo002skeleton_Form_murilo002skeletonOptions extends Siberian_Form_Options_Abstract {
    public function init() {
        parent::init();
        self::addClass("create", $this);
        self::addClass("form-layout-options", $this);
        // $alignment = $this->addSimpleSelect("alignment", __("Button alignment"), array(
        //     "left" => __("Left"),
        //     "right" => __("Right"),
        //     "top" => __("Top"),
        //     "bottom" => __("Bottom"),
        // ));
        // $alignment->setValue("right");
        $banner_image = $this->addSimpleText("banner_url", __("Banner Image (URL)"));
        $this->addNav("submit", __("Save"), false, false);
        self::addClass("btn-sm", $this->getDisplayGroup("submit")->getElement(__("Save")));
    }
}