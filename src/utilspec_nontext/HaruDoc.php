<?php

/**
 * HaruDoc.
 * Haru PDF Document Class.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.harudoc.php
 */
class HaruDoc
{
    /**
     * __construct.
     * Construct new HaruDoc instance.
     *
     * @throws HaruException
     *
     * @see http://php.net/manual/en/harudoc.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addPage.
     * Add new page to the document.
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.addpage.php
     */
    public function addPage(): object
    {
    }

    /**
     * addPageLabel.
     * Set the numbering style for the specified range of pages.
     *
     * @param int    $first_page
     * @param int    $style
     * @param int    $first_num
     * @param string $prefix     = ''
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.addpagelabel.php
     */
    public function addPageLabel(int $first_page, int $style, int $first_num, string $prefix = ''): bool
    {
    }

    /**
     * createOutline.
     * Create a HaruOutline instance.
     *
     * @param string $title
     * @param object $parent_outline (optional)
     * @param object $encoder        (optional)
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.createoutline.php
     */
    public function createOutline(string $title, object $parent_outline, object $encoder): object
    {
    }

    /**
     * getCurrentEncoder.
     * Get HaruEncoder currently used in the document.
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.getcurrentencoder.php
     */
    public function getCurrentEncoder(): object
    {
    }

    /**
     * getCurrentPage.
     * Return current page of the document.
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.getcurrentpage.php
     */
    public function getCurrentPage(): object
    {
    }

    /**
     * getEncoder.
     * Get HaruEncoder instance for the specified encoding.
     *
     * @param string $encoding
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.getencoder.php
     */
    public function getEncoder(string $encoding): object
    {
    }

    /**
     * getFont.
     * Get HaruFont instance.
     *
     * @param string $fontname
     * @param string $encoding (optional)
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.getfont.php
     */
    public function getFont(string $fontname, string $encoding): object
    {
    }

    /**
     * getInfoAttr.
     * Get current value of the specified document attribute.
     *
     * @param int $type
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harudoc.getinfoattr.php
     */
    public function getInfoAttr(int $type): string
    {
    }

    /**
     * getPageLayout.
     * Get current page layout.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harudoc.getpagelayout.php
     */
    public function getPageLayout(): int
    {
    }

    /**
     * getPageMode.
     * Get current page mode.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harudoc.getpagemode.php
     */
    public function getPageMode(): int
    {
    }

    /**
     * getStreamSize.
     * Get the size of the temporary stream.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harudoc.getstreamsize.php
     */
    public function getStreamSize(): int
    {
    }

    /**
     * insertPage.
     * Insert new page just before the specified page.
     *
     * @param object $page
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.insertpage.php
     */
    public function insertPage(object $page): object
    {
    }

    /**
     * loadJPEG.
     * Load a JPEG image.
     *
     * @param string $filename
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.loadjpeg.php
     */
    public function loadJPEG(string $filename): object
    {
    }

    /**
     * loadPNG.
     * Load PNG image and return HaruImage instance.
     *
     * @param string $filename
     * @param bool   $deferred = false
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.loadpng.php
     */
    public function loadPNG(string $filename, bool $deferred = false): object
    {
    }

    /**
     * loadRaw.
     * Load a RAW image.
     *
     * @param string $filename
     * @param int    $width
     * @param int    $height
     * @param int    $color_space
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harudoc.loadraw.php
     */
    public function loadRaw(string $filename, int $width, int $height, int $color_space): object
    {
    }

    /**
     * loadTTC.
     * Load the font with the specified index from TTC file.
     *
     * @param string $fontfile
     * @param int    $index
     * @param bool   $embed    = false
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harudoc.loadttc.php
     */
    public function loadTTC(string $fontfile, int $index, bool $embed = false): string
    {
    }

    /**
     * loadTTF.
     * Load TTF font file.
     *
     * @param string $fontfile
     * @param bool   $embed    = false
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harudoc.loadttf.php
     */
    public function loadTTF(string $fontfile, bool $embed = false): string
    {
    }

    /**
     * loadType1.
     * Load Type1 font.
     *
     * @param string $afmfile
     * @param string $pfmfile (optional)
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harudoc.loadtype1.php
     */
    public function loadType1(string $afmfile, string $pfmfile): string
    {
    }

    /**
     * output.
     * Write the document data to the output buffer.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.output.php
     */
    public function output(): bool
    {
    }

    /**
     * readFromStream.
     * Read data from the temporary stream.
     *
     * @param int $bytes
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harudoc.readfromstream.php
     */
    public function readFromStream(int $bytes): string
    {
    }

    /**
     * resetError.
     * Reset error state of the document handle.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.reseterror.php
     */
    public function resetError(): bool
    {
    }

    /**
     * resetStream.
     * Rewind the temporary stream.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.resetstream.php
     */
    public function resetStream(): bool
    {
    }

    /**
     * save.
     * Save the document into the specified file.
     *
     * @param string $file
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.save.php
     */
    public function save(string $file): bool
    {
    }

    /**
     * saveToStream.
     * Save the document into a temporary stream.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.savetostream.php
     */
    public function saveToStream(): bool
    {
    }

    /**
     * setCompressionMode.
     * Set compression mode for the document.
     *
     * @param int $mode
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setcompressionmode.php
     */
    public function setCompressionMode(int $mode): bool
    {
    }

    /**
     * setCurrentEncoder.
     * Set the current encoder for the document.
     *
     * @param string $encoding
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setcurrentencoder.php
     */
    public function setCurrentEncoder(string $encoding): bool
    {
    }

    /**
     * setEncryptionMode.
     * Set encryption mode for the document.
     *
     * @param int $mode
     * @param int $key_len = 5
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setencryptionmode.php
     */
    public function setEncryptionMode(int $mode, int $key_len = 5): bool
    {
    }

    /**
     * setInfoAttr.
     * Set the info attribute of the document.
     *
     * @param int    $type
     * @param string $info
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setinfoattr.php
     */
    public function setInfoAttr(int $type, string $info): bool
    {
    }

    /**
     * setInfoDateAttr.
     * Set the datetime info attributes of the document.
     *
     * @param int    $type
     * @param int    $year
     * @param int    $month
     * @param int    $day
     * @param int    $hour
     * @param int    $min
     * @param int    $sec
     * @param string $ind
     * @param int    $off_hour
     * @param int    $off_min
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setinfodateattr.php
     */
    public function setInfoDateAttr(int $type, int $year, int $month, int $day, int $hour, int $min, int $sec, string $ind, int $off_hour, int $off_min): bool
    {
    }

    /**
     * setOpenAction.
     * Define which page is shown when the document is opened.
     *
     * @param object $destination
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setopenaction.php
     */
    public function setOpenAction(object $destination): bool
    {
    }

    /**
     * setPageLayout.
     * Set how pages should be displayed.
     *
     * @param int $layout
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setpagelayout.php
     */
    public function setPageLayout(int $layout): bool
    {
    }

    /**
     * setPageMode.
     * Set how the document should be displayed.
     *
     * @param int $mode
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setpagemode.php
     */
    public function setPageMode(int $mode): bool
    {
    }

    /**
     * setPagesConfiguration.
     * Set the number of pages per set of pages.
     *
     * @param int $page_per_pages
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setpagesconfiguration.php
     */
    public function setPagesConfiguration(int $page_per_pages): bool
    {
    }

    /**
     * setPassword.
     * Set owner and user passwords for the document.
     *
     * @param string $owner_password
     * @param string $user_password
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setpassword.php
     */
    public function setPassword(string $owner_password, string $user_password): bool
    {
    }

    /**
     * setPermission.
     * Set permissions for the document.
     *
     * @param int $permission
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.setpermission.php
     */
    public function setPermission(int $permission): bool
    {
    }

    /**
     * useCNSEncodings.
     * Enable Chinese simplified encodings.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usecnsencodings.php
     */
    public function useCNSEncodings(): bool
    {
    }

    /**
     * useCNSFonts.
     * Enable builtin Chinese simplified fonts.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usecnsfonts.php
     */
    public function useCNSFonts(): bool
    {
    }

    /**
     * useCNTEncodings.
     * Enable Chinese traditional encodings.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usecntencodings.php
     */
    public function useCNTEncodings(): bool
    {
    }

    /**
     * useCNTFonts.
     * Enable builtin Chinese traditional fonts.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usecntfonts.php
     */
    public function useCNTFonts(): bool
    {
    }

    /**
     * useJPEncodings.
     * Enable Japanese encodings.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usejpencodings.php
     */
    public function useJPEncodings(): bool
    {
    }

    /**
     * useJPFonts.
     * Enable builtin Japanese fonts.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usejpfonts.php
     */
    public function useJPFonts(): bool
    {
    }

    /**
     * useKREncodings.
     * Enable Korean encodings.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usekrencodings.php
     */
    public function useKREncodings(): bool
    {
    }

    /**
     * useKRFonts.
     * Enable builtin Korean fonts.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudoc.usekrfonts.php
     */
    public function useKRFonts(): bool
    {
    }
}
