<?php

/**
 * tidy.
 * An HTML node in an HTML file, as detected by tidy.
 *
 * @property string $errorBuffer
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tidy.php
 */
class tidy
{
    public $errorBuffer;

    /**
     * __construct.
     * Constructs a new tidy object.
     *
     * @param string $filename         (optional)
     * @param mixed  $config           (optional)
     * @param string $encoding         (optional)
     * @param bool   $use_include_path (optional)
     *
     * @see http://php.net/manual/en/tidy.construct.php
     */
    public function __construct(string $filename, mixed $config, string $encoding, bool $use_include_path)
    {
    }

    /**
     * body.
     * Returns a tidyNode object starting from the <body> tag of the tidy parse tree.
     *
     * @return tidyNode
     *
     * @see http://php.net/manual/en/tidy.body.php
     */
    public function body(): tidyNode
    {
    }

    /**
     * cleanRepair.
     * Execute configured cleanup and repair operations on parsed markup.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.cleanrepair.php
     */
    public function cleanRepair(): bool
    {
    }

    /**
     * diagnose.
     * Run configured diagnostics on parsed and repaired markup.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.diagnose.php
     */
    public function diagnose(): bool
    {
    }

    /**
     * getConfig.
     * Get current Tidy configuration.
     *
     * @return array
     *
     * @see http://php.net/manual/en/tidy.getconfig.php
     */
    public function getConfig(): array
    {
    }

    /**
     * getHtmlVer.
     * Get the Detected HTML version for the specified document.
     *
     * @return int
     *
     * @see http://php.net/manual/en/tidy.gethtmlver.php
     */
    public function getHtmlVer(): int
    {
    }

    /**
     * getOpt.
     * Returns the value of the specified configuration option for the tidy document.
     *
     * @param string $option
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tidy.getopt.php
     */
    public function getOpt(string $option): mixed
    {
    }

    /**
     * getOptDoc.
     * Returns the documentation for the given option name.
     *
     * @param string $optname
     *
     * @return string
     *
     * @see http://php.net/manual/en/tidy.getoptdoc.php
     */
    public function getOptDoc(string $optname): string
    {
    }

    /**
     * getRelease.
     * Get release date (version) for Tidy library.
     *
     * @return string
     *
     * @see http://php.net/manual/en/tidy.getrelease.php
     */
    public function getRelease(): string
    {
    }

    /**
     * getStatus.
     * Get status of specified document.
     *
     * @return int
     *
     * @see http://php.net/manual/en/tidy.getstatus.php
     */
    public function getStatus(): int
    {
    }

    /**
     * head.
     * Returns a tidyNode object starting from the <head> tag of the tidy parse tree.
     *
     * @return tidyNode
     *
     * @see http://php.net/manual/en/tidy.head.php
     */
    public function head(): tidyNode
    {
    }

    /**
     * html.
     * Returns a tidyNode object starting from the <html> tag of the tidy parse tree.
     *
     * @return tidyNode
     *
     * @see http://php.net/manual/en/tidy.html.php
     */
    public function html(): tidyNode
    {
    }

    /**
     * isXhtml.
     * Indicates if the document is a XHTML document.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.isxhtml.php
     */
    public function isXhtml(): bool
    {
    }

    /**
     * isXml.
     * Indicates if the document is a generic (non HTML/XHTML) XML document.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.isxml.php
     */
    public function isXml(): bool
    {
    }

    /**
     * parseFile.
     * Parse markup in file or URI.
     *
     * @param string $filename
     * @param mixed  $config           (optional)
     * @param string $encoding         (optional)
     * @param bool   $use_include_path = false (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.parsefile.php
     */
    public function parseFile(string $filename, mixed $config, string $encoding, bool $use_include_path = false): bool
    {
    }

    /**
     * parseString.
     * Parse a document stored in a string.
     *
     * @param string $input
     * @param mixed  $config   (optional)
     * @param string $encoding (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidy.parsestring.php
     */
    public function parseString(string $input, mixed $config, string $encoding): bool
    {
    }

    /**
     * repairFile.
     * Repair a file and return it as a string.
     *
     * @param string $filename
     * @param mixed  $config           (optional)
     * @param string $encoding         (optional)
     * @param bool   $use_include_path = false (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/tidy.repairfile.php
     */
    public function repairFile(string $filename, mixed $config, string $encoding, bool $use_include_path = false): string
    {
    }

    /**
     * repairString.
     * Repair a string using an optionally provided configuration file.
     *
     * @param string $data
     * @param mixed  $config   (optional)
     * @param string $encoding (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/tidy.repairstring.php
     */
    public function repairString(string $data, mixed $config, string $encoding): string
    {
    }

    /**
     * root.
     * Returns a tidyNode object representing the root of the tidy parse tree.
     *
     * @return tidyNode
     *
     * @see http://php.net/manual/en/tidy.root.php
     */
    public function root(): tidyNode
    {
    }
}
