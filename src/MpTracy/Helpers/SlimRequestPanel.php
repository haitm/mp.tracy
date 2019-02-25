<?php
/**
 * Copyright 2016 1f7.wizard@gmail.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace MpTracy\Helpers;

use Tracy\IBarPanel;

class SlimRequestPanel implements IBarPanel
{
    private $content;
    private $ver;
    private $icon;

    public function __construct($data = null, array $ver = [])
    {
        $this->content = $data;
        $this->ver = $ver;
    }

    public function getTab()
    {
        $this->icon = '<svg enable-background="new 0 0 64 64" height="16px" version="1.1" viewBox="0 0 64 64" '.
            'width="16px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org'.
            '/1999/xlink"><g><circle cx="32" cy="32" fill="#77B3D4" r="32"/></g><g opacity="0.2"><path d="M49.529'.
            ',33.855L35.259,15.71c-1.793-2.28-4.726-2.28-6.519,0L14.471,33.855 C12.679,36.135,13.439,38,16.161,'.
            '38H24v12c0,2.209,1.791,4,4,4h8c2.209,0,4-1.791,4-4V38h7.839 C50.561,38,51.321,36.135,49.529,33.855z"'.
            ' fill="#231F20"/></g><g><path d="M40,48c0,2.209-1.791,4-4,4h-8c-2.209,0-4-1.791-4-4V24c0-2.209,1.791'.
            '-4,4-4h8c2.209,0,4,1.791,4,4V48z" fill="#FFFFFF"/></g><g><path d="M16.161,36c-2.722,0-3.483-1.865-1.'.
            '69-4.145L28.741,13.71c1.793-2.28,4.726-2.28,6.519,0l14.269,18.146    c1.793,2.28,1.032,4.145-1.69,4.'.
            '145H16.161z" fill="#FFFFFF"/></g></svg>';
        return '<span title="Slim Http Request">'.$this->icon.'</span>';
    }

    public function getPanel()
    {
        return '<h1>'.$this->icon.' Slim '.$this->ver['slim'].' Request:</h1>
        <div style="overflow: auto; max-height: 600px;">' . $this->content . '</div>';
    }
}
