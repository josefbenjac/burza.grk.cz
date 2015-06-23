<?php

/**
 * @package burza.grk.cz
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 * @version $$REV$$
 */

namespace App\Front\Controls\BookContact;

interface IBookContactFactory
{

    /**
     * @param int $bookId
     * @return BookContact
     */
    function create($bookId);
}
