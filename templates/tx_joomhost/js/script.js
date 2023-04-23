/**
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org
 *------------------------------------------------------------------------------
 */

(function ($) {
    $(document).ready(function () {
        // alert("Hi");

        //Preloader
        $(window).load(function () {
            $('.preloader-box').fadeOut('slow', function () {
                $(this).remove();
            });
        });

        // Back to top
        $('#back-to-top').on('click', function () {
            $("html, body").animate({scrollTop: 0}, 500);
            return false;
        });

    });
})(jQuery);