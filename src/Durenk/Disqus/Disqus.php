<?php 
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 Rob Brazier <rob.brazier@me.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category   Libraries
 * @package    Libraries
 * @subpackage Libraries
 * @author     Dedy Ibnu (DuRenK) <dedy.ibnu@hotmail.com>
 * @copyright  2013 Dedy Ibnu (DuRenK).
 * @license    http://www.opensource.org/licenses/mit-license.php  MIT License
 * @version    2.0.0
 * @link       http://github.com/durenk/laravel4disqus
 */

namespace Durenk\Disqus;

class Disqus
{
    private $disqus_shortname;

    public function __construct($disqus_shortname)
    {
        $this->disqus_shortname = $disqus_shortname;
    }

    public function get_html()
    {
        return "<div id='disqus_thread'></div>
        <script type='text/javascript'>
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = '$this->disqus_shortname'; // Required - Replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href='http://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>
        <a href='http://disqus.com' class='dsq-brlink'>
            blog comments powered by <span class='logo-disqus'>Disqus</span>
        </a>";
    }
}
