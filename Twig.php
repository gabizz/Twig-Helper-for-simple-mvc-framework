<?php 
/**
 * TWIG Helper Class for Simple MVC Framework.
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (c) 2015 Gabriel Maftei <gmaftei@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * You should have received a copy of the MIT License along with this program.
 * If not, see <https://opensource.org/licenses/MIT>;
 *
 * @category   Helpers
 *
 * @author     Gabriel Maftei <gmaftei@gmail.com>
 * @copyright  2015 Gabriel Maftei
 * @license    MIT
 *
 * @version    1.0
 *
 * @link       https://github.com/gabizz/Twig-Helper-for-simple-mvc-framework
 * @since      File available since Release 1.0
**/

namespace helpers;

class Twig {

    public static function render ($path, $data = False, $extension ="tpl") {
		$loader_path = dirname($path); 

        $template_name = end(explode("/",$path)).".".$extension;
		
		$loader = new \Twig_Loader_Filesystem("app/views/$loader_path");
		$twig = new \Twig_Environment($loader, array(
                        'cache' =>  'cache',
                        'debug' =>  true,
                  'auto_reload' =>  true,
             'strict_variables' =>  true,
                   'autoescape' =>  true,

        ));
		$twig->AddExtension(new \Twig_Extension_Debug());
		echo $twig->render($template_name, $data);
    }
}
