<?php

abstract class AbstractRouting{
    abstract protected function controllerMethodExists($controller,$method);
    abstract protected function showPages($controller,$method,$parameter);
    abstract protected function controllerFileExits($controller);

}