<?php

/**
 * Imagick.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.imagick.php
 */
class Imagick implements Iterator
{
    /**
     * __construct.
     * The Imagick constructor.
     *
     *
     * @param mixed $files
     *
     * @throws ImagickException
     *
     * @see http://php.net/manual/en/imagick.construct.php
     */
    public function __construct(mixed $files)
    {
    }

    /**
     * __toString.
     * Returns the image as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * adaptiveBlurImage.
     * Adds adaptive blur filter to image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.adaptiveblurimage.php
     */
    public function adaptiveBlurImage(float $radius, float $sigma, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * adaptiveResizeImage.
     * Adaptively resize image with data dependent triangulation.
     *
     * @param int  $columns
     * @param int  $rows
     * @param bool $bestfit = false
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.adaptiveresizeimage.php
     */
    public function adaptiveResizeImage(int $columns, int $rows, bool $bestfit = false): bool
    {
    }

    /**
     * adaptiveSharpenImage.
     * Adaptively sharpen the image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.adaptivesharpenimage.php
     */
    public function adaptiveSharpenImage(float $radius, float $sigma, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * adaptiveThresholdImage.
     * Selects a threshold for each pixel based on a range of intensity.
     *
     * @param int $width
     * @param int $height
     * @param int $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.adaptivethresholdimage.php
     */
    public function adaptiveThresholdImage(int $width, int $height, int $offset): bool
    {
    }

    /**
     * addImage.
     * Adds new image to Imagick object image list.
     *
     * @param Imagick $source
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.addimage.php
     */
    public function addImage(Imagick $source): bool
    {
    }

    /**
     * addNoiseImage.
     * Adds random noise to the image.
     *
     * @param int $noise_type
     * @param int $channel    = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.addnoiseimage.php
     */
    public function addNoiseImage(int $noise_type, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * affineTransformImage.
     * Transforms an image.
     *
     * @param ImagickDraw $matrix
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.affinetransformimage.php
     */
    public function affineTransformImage(ImagickDraw $matrix): bool
    {
    }

    /**
     * animateImages.
     * Animates an image or images.
     *
     * @param string $x_server
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.animateimages.php
     */
    public function animateImages(string $x_server): bool
    {
    }

    /**
     * annotateImage.
     * Annotates an image with text.
     *
     * @param ImagickDraw $draw_settings
     * @param float       $x
     * @param float       $y
     * @param float       $angle
     * @param string      $text
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.annotateimage.php
     */
    public function annotateImage(ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool
    {
    }

    /**
     * appendImages.
     * Append a set of images.
     *
     * @param bool $stack = false
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.appendimages.php
     */
    public function appendImages(bool $stack = false): Imagick
    {
    }

    /**
     * autoLevelImage.
     * Description.
     *
     * @param string $CHANNEL = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.autolevelimage.php
     */
    public function autoLevelImage(string $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * averageImages.
     * Average a set of images.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.averageimages.php
     */
    public function averageImages(): Imagick
    {
    }

    /**
     * blackThresholdImage.
     * Forces all pixels below the threshold into black.
     *
     * @param mixed $threshold
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.blackthresholdimage.php
     */
    public function blackThresholdImage(mixed $threshold): bool
    {
    }

    /**
     * blueShiftImage.
     * Description.
     *
     * @param float $factor = 1.5
     *
     * @see http://php.net/manual/en/imagick.blueshiftimage.php
     */
    public function blueShiftImage(float $factor = 1.5): void
    {
    }

    /**
     * blurImage.
     * Adds blur filter to image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.blurimage.php
     */
    public function blurImage(float $radius, float $sigma, int $channel): bool
    {
    }

    /**
     * borderImage.
     * Surrounds the image with a border.
     *
     * @param mixed $bordercolor
     * @param int   $width
     * @param int   $height
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.borderimage.php
     */
    public function borderImage(mixed $bordercolor, int $width, int $height): bool
    {
    }

    /**
     * brightnessContrastImage.
     * Description.
     *
     * @param string $brightness
     * @param string $contrast
     * @param string $CHANNEL    = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.brightnesscontrastimage.php
     */
    public function brightnessContrastImage(string $brightness, string $contrast, string $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * charcoalImage.
     * Simulates a charcoal drawing.
     *
     * @param float $radius
     * @param float $sigma
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.charcoalimage.php
     */
    public function charcoalImage(float $radius, float $sigma): bool
    {
    }

    /**
     * chopImage.
     * Removes a region of an image and trims.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.chopimage.php
     */
    public function chopImage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * clampImage.
     * Description.
     *
     * @param string $CHANNEL = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.clampimage.php
     */
    public function clampImage(string $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * clear.
     * Clears all resources associated to Imagick object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * clipImage.
     * Clips along the first path from the 8BIM profile.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.clipimage.php
     */
    public function clipImage(): bool
    {
    }

    /**
     * clipImagePath.
     * Description.
     *
     * @param string $pathname
     * @param string $inside
     *
     * @see http://php.net/manual/en/imagick.clipimagepath.php
     */
    public function clipImagePath(string $pathname, string $inside): void
    {
    }

    /**
     * clipPathImage.
     * Clips along the named paths from the 8BIM profile.
     *
     * @param string $pathname
     * @param bool   $inside
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.clippathimage.php
     */
    public function clipPathImage(string $pathname, bool $inside): bool
    {
    }

    /**
     * clone.
     * Makes an exact copy of the Imagick object.
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.clone.php
     */
    public function clone(): Imagick
    {
    }

    /**
     * clutImage.
     * Replaces colors in the image.
     *
     * @param Imagick $lookup_table
     * @param float   $channel      = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.clutimage.php
     */
    public function clutImage(Imagick $lookup_table, float $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * coalesceImages.
     * Composites a set of images.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.coalesceimages.php
     */
    public function coalesceImages(): Imagick
    {
    }

    /**
     * colorFloodfillImage.
     * Changes the color value of any pixel that matches target.
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int   $x
     * @param int   $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.colorfloodfillimage.php
     */
    public function colorFloodfillImage(mixed $fill, float $fuzz, mixed $bordercolor, int $x, int $y): bool
    {
    }

    /**
     * colorizeImage.
     * Blends the fill color with the image.
     *
     * @param mixed $colorize
     * @param mixed $opacity
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.colorizeimage.php
     */
    public function colorizeImage(mixed $colorize, mixed $opacity): bool
    {
    }

    /**
     * colorMatrixImage.
     * Description.
     *
     * @param string $color_matrix = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.colormatriximage.php
     */
    public function colorMatrixImage(string $color_matrix = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * combineImages.
     * Combines one or more images into a single image.
     *
     * @param int $channelType
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.combineimages.php
     */
    public function combineImages(int $channelType): Imagick
    {
    }

    /**
     * commentImage.
     * Adds a comment to your image.
     *
     * @param string $comment
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.commentimage.php
     */
    public function commentImage(string $comment): bool
    {
    }

    /**
     * compareImageChannels.
     * Returns the difference in one or more images.
     *
     * @param Imagick $image
     * @param int     $channelType
     * @param int     $metricType
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.compareimagechannels.php
     */
    public function compareImageChannels(Imagick $image, int $channelType, int $metricType): array
    {
    }

    /**
     * compareImageLayers.
     * Returns the maximum bounding region between images.
     *
     * @param int $method
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.compareimagelayers.php
     */
    public function compareImageLayers(int $method): Imagick
    {
    }

    /**
     * compareImages.
     * Compares an image to a reconstructed image.
     *
     * @param Imagick $compare
     * @param int     $metric
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.compareimages.php
     */
    public function compareImages(Imagick $compare, int $metric): array
    {
    }

    /**
     * compositeImage.
     * Composite one image onto another.
     *
     * @param Imagick $composite_object
     * @param int     $composite
     * @param int     $x
     * @param int     $y
     * @param int     $channel          = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.compositeimage.php
     */
    public function compositeImage(Imagick $composite_object, int $composite, int $x, int $y, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * contrastImage.
     * Change the contrast of the image.
     *
     * @param bool $sharpen
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.contrastimage.php
     */
    public function contrastImage(bool $sharpen): bool
    {
    }

    /**
     * contrastStretchImage.
     * Enhances the contrast of a color image.
     *
     * @param float $black_point
     * @param float $white_point
     * @param int   $channel     = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.contraststretchimage.php
     */
    public function contrastStretchImage(float $black_point, float $white_point, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * convolveImage.
     * Applies a custom convolution kernel to the image.
     *
     * @param array $kernel
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.convolveimage.php
     */
    public function convolveImage(array $kernel, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * count.
     * Description.
     *
     * @param string $mode (optional)
     *
     * @see http://php.net/manual/en/imagick.count.php
     */
    public function count(string $mode): void
    {
    }

    /**
     * cropImage.
     * Extracts a region of the image.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.cropimage.php
     */
    public function cropImage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * cropThumbnailImage.
     * Creates a crop thumbnail.
     *
     * @param int $width
     * @param int $height
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.cropthumbnailimage.php
     */
    public function cropThumbnailImage(int $width, int $height): bool
    {
    }

    /**
     * current.
     * Returns a reference to the current Imagick object.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.current.php
     */
    public function current(): Imagick
    {
    }

    /**
     * cycleColormapImage.
     * Displaces an image's colormap.
     *
     * @param int $displace
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.cyclecolormapimage.php
     */
    public function cycleColormapImage(int $displace): bool
    {
    }

    /**
     * decipherImage.
     * Deciphers an image.
     *
     * @param string $passphrase
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.decipherimage.php
     */
    public function decipherImage(string $passphrase): bool
    {
    }

    /**
     * deconstructImages.
     * Returns certain pixel differences between images.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.deconstructimages.php
     */
    public function deconstructImages(): Imagick
    {
    }

    /**
     * deleteImageArtifact.
     * Delete image artifact.
     *
     * @param string $artifact
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.deleteimageartifact.php
     */
    public function deleteImageArtifact(string $artifact): bool
    {
    }

    /**
     * deleteImageProperty.
     * Description.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/imagick.deleteimageproperty.php
     */
    public function deleteImageProperty(string $name): void
    {
    }

    /**
     * deskewImage.
     * Removes skew from the image.
     *
     * @param float $threshold
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.deskewimage.php
     */
    public function deskewImage(float $threshold): bool
    {
    }

    /**
     * despeckleImage.
     * Reduces the speckle noise in an image.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.despeckleimage.php
     */
    public function despeckleImage(): bool
    {
    }

    /**
     * destroy.
     * Destroys the Imagick object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * displayImage.
     * Displays an image.
     *
     * @param string $servername
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.displayimage.php
     */
    public function displayImage(string $servername): bool
    {
    }

    /**
     * displayImages.
     * Displays an image or image sequence.
     *
     * @param string $servername
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.displayimages.php
     */
    public function displayImages(string $servername): bool
    {
    }

    /**
     * distortImage.
     * Distorts an image using various distortion methods.
     *
     * @param int   $method
     * @param array $arguments
     * @param bool  $bestfit
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.distortimage.php
     */
    public function distortImage(int $method, array $arguments, bool $bestfit): bool
    {
    }

    /**
     * drawImage.
     * Renders the ImagickDraw object on the current image.
     *
     * @param ImagickDraw $draw
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.drawimage.php
     */
    public function drawImage(ImagickDraw $draw): bool
    {
    }

    /**
     * edgeImage.
     * Enhance edges within the image.
     *
     * @param float $radius
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.edgeimage.php
     */
    public function edgeImage(float $radius): bool
    {
    }

    /**
     * embossImage.
     * Returns a grayscale image with a three-dimensional effect.
     *
     * @param float $radius
     * @param float $sigma
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.embossimage.php
     */
    public function embossImage(float $radius, float $sigma): bool
    {
    }

    /**
     * encipherImage.
     * Enciphers an image.
     *
     * @param string $passphrase
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.encipherimage.php
     */
    public function encipherImage(string $passphrase): bool
    {
    }

    /**
     * enhanceImage.
     * Improves the quality of a noisy image.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.enhanceimage.php
     */
    public function enhanceImage(): bool
    {
    }

    /**
     * equalizeImage.
     * Equalizes the image histogram.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.equalizeimage.php
     */
    public function equalizeImage(): bool
    {
    }

    /**
     * evaluateImage.
     * Applies an expression to an image.
     *
     * @param int   $op
     * @param float $constant
     * @param int   $channel  = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.evaluateimage.php
     */
    public function evaluateImage(int $op, float $constant, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * exportImagePixels.
     * Exports raw image pixels.
     *
     * @param int    $x
     * @param int    $y
     * @param int    $width
     * @param int    $height
     * @param string $map
     * @param int    $STORAGE
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.exportimagepixels.php
     */
    public function exportImagePixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array
    {
    }

    /**
     * extentImage.
     * Set image size.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.extentimage.php
     */
    public function extentImage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * filter.
     * Description.
     *
     * @param ImagickKernel $ImagickKernel
     * @param int           $CHANNEL       = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.filter.php
     */
    public function filter(ImagickKernel $ImagickKernel, int $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * flattenImages.
     * Merges a sequence of images.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.flattenimages.php
     */
    public function flattenImages(): Imagick
    {
    }

    /**
     * flipImage.
     * Creates a vertical mirror image.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.flipimage.php
     */
    public function flipImage(): bool
    {
    }

    /**
     * floodFillPaintImage.
     * Changes the color value of any pixel that matches target.
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $target
     * @param int   $x
     * @param int   $y
     * @param bool  $invert
     * @param int   $channel = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.floodfillpaintimage.php
     */
    public function floodFillPaintImage(mixed $fill, float $fuzz, mixed $target, int $x, int $y, bool $invert, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * flopImage.
     * Creates a horizontal mirror image.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.flopimage.php
     */
    public function flopImage(): bool
    {
    }

    /**
     * forwardFourierTransformimage.
     * Description.
     *
     * @param bool $magnitude
     *
     * @see http://php.net/manual/en/imagick.forwardfouriertransformimage.php
     */
    public function forwardFourierTransformimage(bool $magnitude): void
    {
    }

    /**
     * frameImage.
     * Adds a simulated three-dimensional border.
     *
     * @param mixed $matte_color
     * @param int   $width
     * @param int   $height
     * @param int   $inner_bevel
     * @param int   $outer_bevel
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.frameimage.php
     */
    public function frameImage(mixed $matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool
    {
    }

    /**
     * functionImage.
     * Applies a function on the image.
     *
     * @param int   $function
     * @param array $arguments
     * @param int   $channel   = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.functionimage.php
     */
    public function functionImage(int $function, array $arguments, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * fxImage.
     * Evaluate expression for each pixel in the image.
     *
     * @param string $expression
     * @param int    $channel    = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.fximage.php
     */
    public function fxImage(string $expression, int $channel = self::CHANNEL_ALL): Imagick
    {
    }

    /**
     * gammaImage.
     * Gamma-corrects an image.
     *
     * @param float $gamma
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.gammaimage.php
     */
    public function gammaImage(float $gamma, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * gaussianBlurImage.
     * Blurs an image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.gaussianblurimage.php
     */
    public function gaussianBlurImage(float $radius, float $sigma, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * getColorspace.
     * Gets the colorspace.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getcolorspace.php
     */
    public function getColorspace(): int
    {
    }

    /**
     * getCompression.
     * Gets the object compression type.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getcompression.php
     */
    public function getCompression(): int
    {
    }

    /**
     * getCompressionQuality.
     * Gets the object compression quality.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getcompressionquality.php
     */
    public function getCompressionQuality(): int
    {
    }

    /**
     * getCopyright.
     * Returns the ImageMagick API copyright as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getcopyright.php
     */
    public function getCopyright(): string
    {
    }

    /**
     * getFilename.
     * The filename associated with an image sequence.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * getFont.
     * Gets font.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getfont.php
     */
    public function getFont(): string
    {
    }

    /**
     * getFormat.
     * Returns the format of the Imagick object.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getformat.php
     */
    public function getFormat(): string
    {
    }

    /**
     * getGravity.
     * Gets the gravity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getgravity.php
     */
    public function getGravity(): int
    {
    }

    /**
     * getHomeURL.
     * Returns the ImageMagick home URL.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.gethomeurl.php
     */
    public function getHomeURL(): string
    {
    }

    /**
     * getImage.
     * Returns a new Imagick object.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.getimage.php
     */
    public function getImage(): Imagick
    {
    }

    /**
     * getImageAlphaChannel.
     * Gets the image alpha channel.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagealphachannel.php
     */
    public function getImageAlphaChannel(): int
    {
    }

    /**
     * getImageArtifact.
     * Get image artifact.
     *
     * @param string $artifact
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageartifact.php
     */
    public function getImageArtifact(string $artifact): string
    {
    }

    /**
     * getImageAttribute.
     * Description.
     *
     * @param string $key
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageattribute.php
     */
    public function getImageAttribute(string $key): string
    {
    }

    /**
     * getImageBackgroundColor.
     * Returns the image background color.
     *
     * @throws ImagickException
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagick.getimagebackgroundcolor.php
     */
    public function getImageBackgroundColor(): ImagickPixel
    {
    }

    /**
     * getImageBlob.
     * Returns the image sequence as a blob.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageblob.php
     */
    public function getImageBlob(): string
    {
    }

    /**
     * getImageBluePrimary.
     * Returns the chromaticy blue primary point.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageblueprimary.php
     */
    public function getImageBluePrimary(): array
    {
    }

    /**
     * getImageBorderColor.
     * Returns the image border color.
     *
     * @throws ImagickException
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagick.getimagebordercolor.php
     */
    public function getImageBorderColor(): ImagickPixel
    {
    }

    /**
     * getImageChannelDepth.
     * Gets the depth for a particular image channel.
     *
     * @param int $channel
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagechanneldepth.php
     */
    public function getImageChannelDepth(int $channel): int
    {
    }

    /**
     * getImageChannelDistortion.
     * Compares image channels of an image to a reconstructed image.
     *
     * @param Imagick $reference
     * @param int     $channel
     * @param int     $metric
     *
     * @throws ImagickException
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getimagechanneldistortion.php
     */
    public function getImageChannelDistortion(Imagick $reference, int $channel, int $metric): float
    {
    }

    /**
     * getImageChannelDistortions.
     * Gets channel distortions.
     *
     * @param Imagick $reference
     * @param int     $metric
     * @param int     $channel   = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getimagechanneldistortions.php
     */
    public function getImageChannelDistortions(Imagick $reference, int $metric, int $channel = self::CHANNEL_DEFAULT): float
    {
    }

    /**
     * getImageChannelExtrema.
     * Gets the extrema for one or more image channels.
     *
     * @param int $channel
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagechannelextrema.php
     */
    public function getImageChannelExtrema(int $channel): array
    {
    }

    /**
     * getImageChannelKurtosis.
     * The getImageChannelKurtosis purpose.
     *
     * @param int $channel = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagechannelkurtosis.php
     */
    public function getImageChannelKurtosis(int $channel = self::CHANNEL_DEFAULT): array
    {
    }

    /**
     * getImageChannelMean.
     * Gets the mean and standard deviation.
     *
     * @param int $channel
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagechannelmean.php
     */
    public function getImageChannelMean(int $channel): array
    {
    }

    /**
     * getImageChannelRange.
     * Gets channel range.
     *
     * @param int $channel
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagechannelrange.php
     */
    public function getImageChannelRange(int $channel): array
    {
    }

    /**
     * getImageChannelStatistics.
     * Returns statistics for each channel in the image.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagechannelstatistics.php
     */
    public function getImageChannelStatistics(): array
    {
    }

    /**
     * getImageClipMask.
     * Gets image clip mask.
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.getimageclipmask.php
     */
    public function getImageClipMask(): Imagick
    {
    }

    /**
     * getImageColormapColor.
     * Returns the color of the specified colormap index.
     *
     * @param int $index
     *
     * @throws ImagickException
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagick.getimagecolormapcolor.php
     */
    public function getImageColormapColor(int $index): ImagickPixel
    {
    }

    /**
     * getImageColors.
     * Gets the number of unique colors in the image.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagecolors.php
     */
    public function getImageColors(): int
    {
    }

    /**
     * getImageColorspace.
     * Gets the image colorspace.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagecolorspace.php
     */
    public function getImageColorspace(): int
    {
    }

    /**
     * getImageCompose.
     * Returns the composite operator associated with the image.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagecompose.php
     */
    public function getImageCompose(): int
    {
    }

    /**
     * getImageCompression.
     * Gets the current image's compression type.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagecompression.php
     */
    public function getImageCompression(): int
    {
    }

    /**
     * getImageCompressionQuality.
     * Gets the current image's compression quality.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagecompressionquality.php
     */
    public function getImageCompressionQuality(): int
    {
    }

    /**
     * getImageDelay.
     * Gets the image delay.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagedelay.php
     */
    public function getImageDelay(): int
    {
    }

    /**
     * getImageDepth.
     * Gets the image depth.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagedepth.php
     */
    public function getImageDepth(): int
    {
    }

    /**
     * getImageDispose.
     * Gets the image disposal method.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagedispose.php
     */
    public function getImageDispose(): int
    {
    }

    /**
     * getImageDistortion.
     * Compares an image to a reconstructed image.
     *
     * @param MagickWand $reference
     * @param int        $metric
     *
     * @throws ImagickException
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getimagedistortion.php
     */
    public function getImageDistortion(MagickWand $reference, int $metric): float
    {
    }

    /**
     * getImageExtrema.
     * Gets the extrema for the image.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageextrema.php
     */
    public function getImageExtrema(): array
    {
    }

    /**
     * getImageFilename.
     * Returns the filename of a particular image in a sequence.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimagefilename.php
     */
    public function getImageFilename(): string
    {
    }

    /**
     * getImageFormat.
     * Returns the format of a particular image in a sequence.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageformat.php
     */
    public function getImageFormat(): string
    {
    }

    /**
     * getImageGamma.
     * Gets the image gamma.
     *
     * @throws ImagickException
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getimagegamma.php
     */
    public function getImageGamma(): float
    {
    }

    /**
     * getImageGeometry.
     * Gets the width and height as an associative array.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagegeometry.php
     */
    public function getImageGeometry(): array
    {
    }

    /**
     * getImageGravity.
     * Gets the image gravity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagegravity.php
     */
    public function getImageGravity(): int
    {
    }

    /**
     * getImageGreenPrimary.
     * Returns the chromaticy green primary point.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagegreenprimary.php
     */
    public function getImageGreenPrimary(): array
    {
    }

    /**
     * getImageHeight.
     * Returns the image height.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageheight.php
     */
    public function getImageHeight(): int
    {
    }

    /**
     * getImageHistogram.
     * Gets the image histogram.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagehistogram.php
     */
    public function getImageHistogram(): array
    {
    }

    /**
     * getImageIndex.
     * Gets the index of the current active image.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageindex.php
     */
    public function getImageIndex(): int
    {
    }

    /**
     * getImageInterlaceScheme.
     * Gets the image interlace scheme.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageinterlacescheme.php
     */
    public function getImageInterlaceScheme(): int
    {
    }

    /**
     * getImageInterpolateMethod.
     * Returns the interpolation method.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageinterpolatemethod.php
     */
    public function getImageInterpolateMethod(): int
    {
    }

    /**
     * getImageIterations.
     * Gets the image iterations.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageiterations.php
     */
    public function getImageIterations(): int
    {
    }

    /**
     * getImageLength.
     * Returns the image length in bytes.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagelength.php
     */
    public function getImageLength(): int
    {
    }

    /**
     * getImageMagickLicense.
     * Returns a string containing the ImageMagick license.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimagemagicklicense.php
     */
    public function getImageMagickLicense(): string
    {
    }

    /**
     * getImageMatte.
     * Return if the image has a matte channel.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.getimagematte.php
     */
    public function getImageMatte(): bool
    {
    }

    /**
     * getImageMatteColor.
     * Returns the image matte color.
     *
     * @throws ImagickException
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagick.getimagemattecolor.php
     */
    public function getImageMatteColor(): ImagickPixel
    {
    }

    /**
     * getImageMimeType.
     * Description.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimagemimetype.php
     */
    public function getImageMimeType(): string
    {
    }

    /**
     * getImageOrientation.
     * Gets the image orientation.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageorientation.php
     */
    public function getImageOrientation(): int
    {
    }

    /**
     * getImagePage.
     * Returns the page geometry.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagepage.php
     */
    public function getImagePage(): array
    {
    }

    /**
     * getImagePixelColor.
     * Returns the color of the specified pixel.
     *
     * @param int $x
     * @param int $y
     *
     * @throws ImagickException
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagick.getimagepixelcolor.php
     */
    public function getImagePixelColor(int $x, int $y): ImagickPixel
    {
    }

    /**
     * getImageProfile.
     * Returns the named image profile.
     *
     * @param string $name
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageprofile.php
     */
    public function getImageProfile(string $name): string
    {
    }

    /**
     * getImageProfiles.
     * Returns the image profiles.
     *
     * @param string $pattern        = '*'
     * @param bool   $include_values = true
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageprofiles.php
     */
    public function getImageProfiles(string $pattern = '*', bool $include_values = true): array
    {
    }

    /**
     * getImageProperties.
     * Returns the image properties.
     *
     * @param string $pattern        = '*'
     * @param bool   $include_values = true
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageproperties.php
     */
    public function getImageProperties(string $pattern = '*', bool $include_values = true): array
    {
    }

    /**
     * getImageProperty.
     * Returns the named image property.
     *
     * @param string $name
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimageproperty.php
     */
    public function getImageProperty(string $name): string
    {
    }

    /**
     * getImageRedPrimary.
     * Returns the chromaticity red primary point.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageredprimary.php
     */
    public function getImageRedPrimary(): array
    {
    }

    /**
     * getImageRegion.
     * Extracts a region of the image.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.getimageregion.php
     */
    public function getImageRegion(int $width, int $height, int $x, int $y): Imagick
    {
    }

    /**
     * getImageRenderingIntent.
     * Gets the image rendering intent.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagerenderingintent.php
     */
    public function getImageRenderingIntent(): int
    {
    }

    /**
     * getImageResolution.
     * Gets the image X and Y resolution.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimageresolution.php
     */
    public function getImageResolution(): array
    {
    }

    /**
     * getImagesBlob.
     * Returns all image sequences as a blob.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimagesblob.php
     */
    public function getImagesBlob(): string
    {
    }

    /**
     * getImageScene.
     * Gets the image scene.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagescene.php
     */
    public function getImageScene(): int
    {
    }

    /**
     * getImageSignature.
     * Generates an SHA-256 message digest.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getimagesignature.php
     */
    public function getImageSignature(): string
    {
    }

    /**
     * getImageSize.
     * Returns the image length in bytes.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagesize.php
     */
    public function getImageSize(): int
    {
    }

    /**
     * getImageTicksPerSecond.
     * Gets the image ticks-per-second.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagetickspersecond.php
     */
    public function getImageTicksPerSecond(): int
    {
    }

    /**
     * getImageTotalInkDensity.
     * Gets the image total ink density.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getimagetotalinkdensity.php
     */
    public function getImageTotalInkDensity(): float
    {
    }

    /**
     * getImageType.
     * Gets the potential image type.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagetype.php
     */
    public function getImageType(): int
    {
    }

    /**
     * getImageUnits.
     * Gets the image units of resolution.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimageunits.php
     */
    public function getImageUnits(): int
    {
    }

    /**
     * getImageVirtualPixelMethod.
     * Returns the virtual pixel method.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagevirtualpixelmethod.php
     */
    public function getImageVirtualPixelMethod(): int
    {
    }

    /**
     * getImageWhitePoint.
     * Returns the chromaticity white point.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getimagewhitepoint.php
     */
    public function getImageWhitePoint(): array
    {
    }

    /**
     * getImageWidth.
     * Returns the image width.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getimagewidth.php
     */
    public function getImageWidth(): int
    {
    }

    /**
     * getInterlaceScheme.
     * Gets the object interlace scheme.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getinterlacescheme.php
     */
    public function getInterlaceScheme(): int
    {
    }

    /**
     * getIteratorIndex.
     * Gets the index of the current active image.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getiteratorindex.php
     */
    public function getIteratorIndex(): int
    {
    }

    /**
     * getNumberImages.
     * Returns the number of images in the object.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getnumberimages.php
     */
    public function getNumberImages(): int
    {
    }

    /**
     * getOption.
     * Returns a value associated with the specified key.
     *
     * @param string $key
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getoption.php
     */
    public function getOption(string $key): string
    {
    }

    /**
     * getPackageName.
     * Returns the ImageMagick package name.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getpackagename.php
     */
    public function getPackageName(): string
    {
    }

    /**
     * getPage.
     * Returns the page geometry.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getpage.php
     */
    public function getPage(): array
    {
    }

    /**
     * getPixelIterator.
     * Returns a MagickPixelIterator.
     *
     * @throws ImagickException
     *
     * @return ImagickPixelIterator
     *
     * @see http://php.net/manual/en/imagick.getpixeliterator.php
     */
    public function getPixelIterator(): ImagickPixelIterator
    {
    }

    /**
     * getPixelRegionIterator.
     * Get an ImagickPixelIterator for an image section.
     *
     * @param int $x
     * @param int $y
     * @param int $columns
     * @param int $rows
     *
     * @throws ImagickException
     *
     * @return ImagickPixelIterator
     *
     * @see http://php.net/manual/en/imagick.getpixelregioniterator.php
     */
    public function getPixelRegionIterator(int $x, int $y, int $columns, int $rows): ImagickPixelIterator
    {
    }

    /**
     * getPointSize.
     * Gets point size.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagick.getpointsize.php
     */
    public function getPointSize(): float
    {
    }

    /**
     * getQuantum.
     * Description.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getquantum.php
     */
    public static function getQuantum(): int
    {
    }

    /**
     * getQuantumDepth.
     * Gets the quantum depth.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getquantumdepth.php
     */
    public function getQuantumDepth(): array
    {
    }

    /**
     * getQuantumRange.
     * Returns the Imagick quantum range.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getquantumrange.php
     */
    public function getQuantumRange(): array
    {
    }

    /**
     * getRegistry.
     * Description.
     *
     * @param string $key
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getregistry.php
     */
    public static function getRegistry(string $key): string
    {
    }

    /**
     * getReleaseDate.
     * Returns the ImageMagick release date.
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.getreleasedate.php
     */
    public function getReleaseDate(): string
    {
    }

    /**
     * getResource.
     * Returns the specified resource's memory usage.
     *
     * @param int $type
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getresource.php
     */
    public function getResource(int $type): int
    {
    }

    /**
     * getResourceLimit.
     * Returns the specified resource limit.
     *
     * @param int $type
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getresourcelimit.php
     */
    public function getResourceLimit(int $type): int
    {
    }

    /**
     * getSamplingFactors.
     * Gets the horizontal and vertical sampling factor.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getsamplingfactors.php
     */
    public function getSamplingFactors(): array
    {
    }

    /**
     * getSize.
     * Returns the size associated with the Imagick object.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getsize.php
     */
    public function getSize(): array
    {
    }

    /**
     * getSizeOffset.
     * Returns the size offset.
     *
     * @throws ImagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagick.getsizeoffset.php
     */
    public function getSizeOffset(): int
    {
    }

    /**
     * getVersion.
     * Returns the ImageMagick API version.
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.getversion.php
     */
    public function getVersion(): array
    {
    }

    /**
     * haldClutImage.
     * Replaces colors in the image.
     *
     * @param Imagick $clut
     * @param int     $channel = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.haldclutimage.php
     */
    public function haldClutImage(Imagick $clut, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * hasNextImage.
     * Checks if the object has more images.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.hasnextimage.php
     */
    public function hasNextImage(): bool
    {
    }

    /**
     * hasPreviousImage.
     * Checks if the object has a previous image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.haspreviousimage.php
     */
    public function hasPreviousImage(): bool
    {
    }

    /**
     * identifyFormat.
     * Description.
     *
     * @param string $embedText
     *
     * @return string|false
     *
     * @see http://php.net/manual/en/imagick.identifyformat.php
     */
    public function identifyFormat(string $embedText): mixed
    {
    }

    /**
     * identifyImage.
     * Identifies an image and fetches attributes.
     *
     * @param bool $appendRawOutput = false
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.identifyimage.php
     */
    public function identifyImage(bool $appendRawOutput = false): array
    {
    }

    /**
     * implodeImage.
     * Creates a new image as a copy.
     *
     * @param float $radius
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.implodeimage.php
     */
    public function implodeImage(float $radius): bool
    {
    }

    /**
     * importImagePixels.
     * Imports image pixels.
     *
     * @param int    $x
     * @param int    $y
     * @param int    $width
     * @param int    $height
     * @param string $map
     * @param int    $storage
     * @param array  $pixels
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.importimagepixels.php
     */
    public function importImagePixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool
    {
    }

    /**
     * inverseFourierTransformImage.
     * Description.
     *
     * @param string $complement
     * @param string $magnitude
     *
     * @see http://php.net/manual/en/imagick.inversefouriertransformimage.php
     */
    public function inverseFourierTransformImage(string $complement, string $magnitude): void
    {
    }

    /**
     * labelImage.
     * Adds a label to an image.
     *
     * @param string $label
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.labelimage.php
     */
    public function labelImage(string $label): bool
    {
    }

    /**
     * levelImage.
     * Adjusts the levels of an image.
     *
     * @param float $blackPoint
     * @param float $gamma
     * @param float $whitePoint
     * @param int   $channel    = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.levelimage.php
     */
    public function levelImage(float $blackPoint, float $gamma, float $whitePoint, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * linearStretchImage.
     * Stretches with saturation the image intensity.
     *
     * @param float $blackPoint
     * @param float $whitePoint
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.linearstretchimage.php
     */
    public function linearStretchImage(float $blackPoint, float $whitePoint): bool
    {
    }

    /**
     * liquidRescaleImage.
     * Animates an image or images.
     *
     * @param int   $width
     * @param int   $height
     * @param float $delta_x
     * @param float $rigidity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.liquidrescaleimage.php
     */
    public function liquidRescaleImage(int $width, int $height, float $delta_x, float $rigidity): bool
    {
    }

    /**
     * listRegistry.
     * Description.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.listregistry.php
     */
    public static function listRegistry(): array
    {
    }

    /**
     * magnifyImage.
     * Scales an image proportionally 2x.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.magnifyimage.php
     */
    public function magnifyImage(): bool
    {
    }

    /**
     * mapImage.
     * Replaces the colors of an image with the closest color from a reference image.
     *
     * @param Imagick $map
     * @param bool    $dither
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.mapimage.php
     */
    public function mapImage(Imagick $map, bool $dither): bool
    {
    }

    /**
     * matteFloodfillImage.
     * Changes the transparency value of a color.
     *
     * @param float $alpha
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int   $x
     * @param int   $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.mattefloodfillimage.php
     */
    public function matteFloodfillImage(float $alpha, float $fuzz, mixed $bordercolor, int $x, int $y): bool
    {
    }

    /**
     * medianFilterImage.
     * Applies a digital filter.
     *
     * @param float $radius
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.medianfilterimage.php
     */
    public function medianFilterImage(float $radius): bool
    {
    }

    /**
     * mergeImageLayers.
     * Merges image layers.
     *
     * @param int $layer_method
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.mergeimagelayers.php
     */
    public function mergeImageLayers(int $layer_method): Imagick
    {
    }

    /**
     * minifyImage.
     * Scales an image proportionally to half its size.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.minifyimage.php
     */
    public function minifyImage(): bool
    {
    }

    /**
     * modulateImage.
     * Control the brightness, saturation, and hue.
     *
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.modulateimage.php
     */
    public function modulateImage(float $brightness, float $saturation, float $hue): bool
    {
    }

    /**
     * montageImage.
     * Creates a composite image.
     *
     * @param ImagickDraw $draw
     * @param string      $tile_geometry
     * @param string      $thumbnail_geometry
     * @param int         $mode
     * @param string      $frame
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.montageimage.php
     */
    public function montageImage(ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): Imagick
    {
    }

    /**
     * morphImages.
     * Method morphs a set of images.
     *
     * @param int $number_frames
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.morphimages.php
     */
    public function morphImages(int $number_frames): Imagick
    {
    }

    /**
     * morphology.
     * Description.
     *
     * @param int           $morphologyMethod
     * @param int           $iterations
     * @param ImagickKernel $ImagickKernel
     * @param string        $CHANNEL          (optional)
     *
     * @see http://php.net/manual/en/imagick.morphology.php
     */
    public function morphology(int $morphologyMethod, int $iterations, ImagickKernel $ImagickKernel, string $CHANNEL): void
    {
    }

    /**
     * mosaicImages.
     * Forms a mosaic from images.
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.mosaicimages.php
     */
    public function mosaicImages(): Imagick
    {
    }

    /**
     * motionBlurImage.
     * Simulates motion blur.
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     * @param int   $channel = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.motionblurimage.php
     */
    public function motionBlurImage(float $radius, float $sigma, float $angle, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * negateImage.
     * Negates the colors in the reference image.
     *
     * @param bool $gray
     * @param int  $channel = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.negateimage.php
     */
    public function negateImage(bool $gray, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * newImage.
     * Creates a new image.
     *
     * @param int    $cols
     * @param int    $rows
     * @param mixed  $background
     * @param string $format     (optional)
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.newimage.php
     */
    public function newImage(int $cols, int $rows, mixed $background, string $format): bool
    {
    }

    /**
     * newPseudoImage.
     * Creates a new image.
     *
     * @param int    $columns
     * @param int    $rows
     * @param string $pseudoString
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.newpseudoimage.php
     */
    public function newPseudoImage(int $columns, int $rows, string $pseudoString): bool
    {
    }

    /**
     * nextImage.
     * Moves to the next image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.nextimage.php
     */
    public function nextImage(): bool
    {
    }

    /**
     * normalizeImage.
     * Enhances the contrast of a color image.
     *
     * @param int $channel = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.normalizeimage.php
     */
    public function normalizeImage(int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * oilPaintImage.
     * Simulates an oil painting.
     *
     * @param float $radius
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.oilpaintimage.php
     */
    public function oilPaintImage(float $radius): bool
    {
    }

    /**
     * opaquePaintImage.
     * Changes the color value of any pixel that matches target.
     *
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param bool  $invert
     * @param int   $channel = Imagick::CHANNEL_DEFAULT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.opaquepaintimage.php
     */
    public function opaquePaintImage(mixed $target, mixed $fill, float $fuzz, bool $invert, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * optimizeImageLayers.
     * Removes repeated portions of images to optimize.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.optimizeimagelayers.php
     */
    public function optimizeImageLayers(): bool
    {
    }

    /**
     * orderedPosterizeImage.
     * Performs an ordered dither.
     *
     * @param string $threshold_map
     * @param int    $channel       = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.orderedposterizeimage.php
     */
    public function orderedPosterizeImage(string $threshold_map, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * paintFloodfillImage.
     * Changes the color value of any pixel that matches target.
     *
     * @param mixed $fill
     * @param float $fuzz
     * @param mixed $bordercolor
     * @param int   $x
     * @param int   $y
     * @param int   $channel     = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.paintfloodfillimage.php
     */
    public function paintFloodfillImage(mixed $fill, float $fuzz, mixed $bordercolor, int $x, int $y, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * paintOpaqueImage.
     * Change any pixel that matches color.
     *
     * @param mixed $target
     * @param mixed $fill
     * @param float $fuzz
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.paintopaqueimage.php
     */
    public function paintOpaqueImage(mixed $target, mixed $fill, float $fuzz, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * paintTransparentImage.
     * Changes any pixel that matches color with the color defined by fill.
     *
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.painttransparentimage.php
     */
    public function paintTransparentImage(mixed $target, float $alpha, float $fuzz): bool
    {
    }

    /**
     * pingImage.
     * Fetch basic attributes about the image.
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.pingimage.php
     */
    public function pingImage(string $filename): bool
    {
    }

    /**
     * pingImageBlob.
     * Quickly fetch attributes.
     *
     * @param string $image
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.pingimageblob.php
     */
    public function pingImageBlob(string $image): bool
    {
    }

    /**
     * pingImageFile.
     * Get basic image attributes in a lightweight manner.
     *
     * @param resource $filehandle
     * @param string   $fileName   (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.pingimagefile.php
     */
    public function pingImageFile(resource $filehandle, string $fileName): bool
    {
    }

    /**
     * polaroidImage.
     * Simulates a Polaroid picture.
     *
     * @param ImagickDraw $properties
     * @param float       $angle
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.polaroidimage.php
     */
    public function polaroidImage(ImagickDraw $properties, float $angle): bool
    {
    }

    /**
     * posterizeImage.
     * Reduces the image to a limited number of color level.
     *
     * @param int  $levels
     * @param bool $dither
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.posterizeimage.php
     */
    public function posterizeImage(int $levels, bool $dither): bool
    {
    }

    /**
     * previewImages.
     * Quickly pin-point appropriate parameters for image processing.
     *
     * @param int $preview
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.previewimages.php
     */
    public function previewImages(int $preview): bool
    {
    }

    /**
     * previousImage.
     * Move to the previous image in the object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.previousimage.php
     */
    public function previousImage(): bool
    {
    }

    /**
     * profileImage.
     * Adds or removes a profile from an image.
     *
     * @param string $name
     * @param string $profile
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.profileimage.php
     */
    public function profileImage(string $name, string $profile): bool
    {
    }

    /**
     * quantizeImage.
     * Analyzes the colors within a reference image.
     *
     * @param int  $numberColors
     * @param int  $colorspace
     * @param int  $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.quantizeimage.php
     */
    public function quantizeImage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool
    {
    }

    /**
     * quantizeImages.
     * Analyzes the colors within a sequence of images.
     *
     * @param int  $numberColors
     * @param int  $colorspace
     * @param int  $treedepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.quantizeimages.php
     */
    public function quantizeImages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool
    {
    }

    /**
     * queryFontMetrics.
     * Returns an array representing the font metrics.
     *
     * @param ImagickDraw $properties
     * @param string      $text
     * @param bool        $multiline  (optional)
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.queryfontmetrics.php
     */
    public function queryFontMetrics(ImagickDraw $properties, string $text, bool $multiline): array
    {
    }

    /**
     * queryFonts.
     * Returns the configured fonts.
     *
     * @param string $pattern = '*'
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.queryfonts.php
     */
    public function queryFonts(string $pattern = '*'): array
    {
    }

    /**
     * queryFormats.
     * Returns formats supported by Imagick.
     *
     * @param string $pattern = '*'
     *
     * @throws ImagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagick.queryformats.php
     */
    public function queryFormats(string $pattern = '*'): array
    {
    }

    /**
     * radialBlurImage.
     * Radial blurs an image.
     *
     * @param float $angle
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.radialblurimage.php
     */
    public function radialBlurImage(float $angle, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * raiseImage.
     * Creates a simulated 3d button-like effect.
     *
     * @param int  $width
     * @param int  $height
     * @param int  $x
     * @param int  $y
     * @param bool $raise
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.raiseimage.php
     */
    public function raiseImage(int $width, int $height, int $x, int $y, bool $raise): bool
    {
    }

    /**
     * randomThresholdImage.
     * Creates a high-contrast, two-color image.
     *
     * @param float $low
     * @param float $high
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.randomthresholdimage.php
     */
    public function randomThresholdImage(float $low, float $high, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * readImage.
     * Reads image from filename.
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.readimage.php
     */
    public function readImage(string $filename): bool
    {
    }

    /**
     * readImageBlob.
     * Reads image from a binary string.
     *
     * @param string $image
     * @param string $filename (optional)
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.readimageblob.php
     */
    public function readImageBlob(string $image, string $filename): bool
    {
    }

    /**
     * readImageFile.
     * Reads image from open filehandle.
     *
     * @param resource $filehandle
     * @param string   $fileName   = null
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.readimagefile.php
     */
    public function readImageFile(resource $filehandle, string $fileName = null): bool
    {
    }

    /**
     * readImages.
     * Description.
     *
     * @param string $filenames
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.readimages.php
     */
    public function readImages(string $filenames): Imagick
    {
    }

    /**
     * recolorImage.
     * Recolors image.
     *
     * @param array $matrix
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.recolorimage.php
     */
    public function recolorImage(array $matrix): bool
    {
    }

    /**
     * reduceNoiseImage.
     * Smooths the contours of an image.
     *
     * @param float $radius
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.reducenoiseimage.php
     */
    public function reduceNoiseImage(float $radius): bool
    {
    }

    /**
     * remapImage.
     * Remaps image colors.
     *
     * @param Imagick $replacement
     * @param int     $DITHER
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.remapimage.php
     */
    public function remapImage(Imagick $replacement, int $DITHER): bool
    {
    }

    /**
     * removeImage.
     * Removes an image from the image list.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.removeimage.php
     */
    public function removeImage(): bool
    {
    }

    /**
     * removeImageProfile.
     * Removes the named image profile and returns it.
     *
     * @param string $name
     *
     * @throws ImagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagick.removeimageprofile.php
     */
    public function removeImageProfile(string $name): string
    {
    }

    /**
     * render.
     * Renders all preceding drawing commands.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.render.php
     */
    public function render(): bool
    {
    }

    /**
     * resampleImage.
     * Resample image to desired resolution.
     *
     * @param float $x_resolution
     * @param float $y_resolution
     * @param int   $filter
     * @param float $blur
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.resampleimage.php
     */
    public function resampleImage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool
    {
    }

    /**
     * resetImagePage.
     * Reset image page.
     *
     * @param string $page
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.resetimagepage.php
     */
    public function resetImagePage(string $page): bool
    {
    }

    /**
     * resizeImage.
     * Scales an image.
     *
     * @param int   $columns
     * @param int   $rows
     * @param int   $filter
     * @param float $blur
     * @param bool  $bestfit = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.resizeimage.php
     */
    public function resizeImage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = false): bool
    {
    }

    /**
     * rollImage.
     * Offsets an image.
     *
     * @param int $x
     * @param int $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.rollimage.php
     */
    public function rollImage(int $x, int $y): bool
    {
    }

    /**
     * rotateImage.
     * Rotates an image.
     *
     * @param mixed $background
     * @param float $degrees
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.rotateimage.php
     */
    public function rotateImage(mixed $background, float $degrees): bool
    {
    }

    /**
     * rotationalBlurImage.
     * Description.
     *
     * @param string $angle
     * @param string $CHANNEL = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.rotationalblurimage.php
     */
    public function rotationalBlurImage(string $angle, string $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * roundCorners.
     * Rounds image corners.
     *
     * @param float $x_rounding
     * @param float $y_rounding
     * @param float $stroke_width    = 10
     * @param float $displace        = 5
     * @param float $size_correction = -6
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.roundcorners.php
     */
    public function roundCorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool
    {
    }

    /**
     * sampleImage.
     * Scales an image with pixel sampling.
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sampleimage.php
     */
    public function sampleImage(int $columns, int $rows): bool
    {
    }

    /**
     * scaleImage.
     * Scales the size of an image.
     *
     * @param int  $cols
     * @param int  $rows
     * @param bool $bestfit = false
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.scaleimage.php
     */
    public function scaleImage(int $cols, int $rows, bool $bestfit = false): bool
    {
    }

    /**
     * segmentImage.
     * Segments an image.
     *
     * @param int   $COLORSPACE
     * @param float $cluster_threshold
     * @param float $smooth_threshold
     * @param bool  $verbose           = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.segmentimage.php
     */
    public function segmentImage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = false): bool
    {
    }

    /**
     * selectiveBlurImage.
     * Description.
     *
     * @param float $radius
     * @param float $sigma
     * @param float $threshold
     * @param int   $CHANNEL
     *
     * @see http://php.net/manual/en/imagick.selectiveblurimage.php
     */
    public function selectiveBlurImage(float $radius, float $sigma, float $threshold, int $CHANNEL): void
    {
    }

    /**
     * separateImageChannel.
     * Separates a channel from the image.
     *
     * @param int $channel
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.separateimagechannel.php
     */
    public function separateImageChannel(int $channel): bool
    {
    }

    /**
     * sepiaToneImage.
     * Sepia tones an image.
     *
     * @param float $threshold
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sepiatoneimage.php
     */
    public function sepiaToneImage(float $threshold): bool
    {
    }

    /**
     * setBackgroundColor.
     * Sets the object's default background colorSets the object's default background color.
     *
     * @param mixed $background
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setbackgroundcolor.php
     */
    public function setBackgroundColor(mixed $background): bool
    {
    }

    /**
     * setColorspace.
     * Set colorspace.
     *
     * @param int $COLORSPACE
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setcolorspace.php
     */
    public function setColorspace(int $COLORSPACE): bool
    {
    }

    /**
     * setCompression.
     * Sets the object's default compression type.
     *
     * @param int $compression
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setcompression.php
     */
    public function setCompression(int $compression): bool
    {
    }

    /**
     * setCompressionQuality.
     * Sets the object's default compression quality.
     *
     * @param int $quality
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setcompressionquality.php
     */
    public function setCompressionQuality(int $quality): bool
    {
    }

    /**
     * setFilename.
     * Sets the filename before you read or write the image.
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setfilename.php
     */
    public function setFilename(string $filename): bool
    {
    }

    /**
     * setFirstIterator.
     * Sets the Imagick iterator to the first image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setfirstiterator.php
     */
    public function setFirstIterator(): bool
    {
    }

    /**
     * setFont.
     * Sets font.
     *
     * @param string $font
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setfont.php
     */
    public function setFont(string $font): bool
    {
    }

    /**
     * setFormat.
     * Sets the format of the Imagick object.
     *
     * @param string $format
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setformat.php
     */
    public function setFormat(string $format): bool
    {
    }

    /**
     * setGravity.
     * Sets the gravity.
     *
     * @param int $gravity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setgravity.php
     */
    public function setGravity(int $gravity): bool
    {
    }

    /**
     * setImage.
     * Replaces image in the object.
     *
     * @param Imagick $replace
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimage.php
     */
    public function setImage(Imagick $replace): bool
    {
    }

    /**
     * setImageAlphaChannel.
     * Sets image alpha channel.
     *
     * @param int $mode
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagealphachannel.php
     */
    public function setImageAlphaChannel(int $mode): bool
    {
    }

    /**
     * setImageArtifact.
     * Set image artifact.
     *
     * @param string $artifact
     * @param string $value
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageartifact.php
     */
    public function setImageArtifact(string $artifact, string $value): bool
    {
    }

    /**
     * setImageAttribute.
     * Description.
     *
     * @param string $key
     * @param string $value
     *
     * @see http://php.net/manual/en/imagick.setimageattribute.php
     */
    public function setImageAttribute(string $key, string $value): void
    {
    }

    /**
     * setImageBackgroundColor.
     * Sets the image background color.
     *
     * @param mixed $background
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagebackgroundcolor.php
     */
    public function setImageBackgroundColor(mixed $background): bool
    {
    }

    /**
     * setImageBias.
     * Sets the image bias for any method that convolves an image.
     *
     * @param float $bias
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagebias.php
     */
    public function setImageBias(float $bias): bool
    {
    }

    /**
     * setImageBiasQuantum.
     * Description.
     *
     * @param string $bias
     *
     * @see http://php.net/manual/en/imagick.setimagebiasquantum.php
     */
    public function setImageBiasQuantum(string $bias): void
    {
    }

    /**
     * setImageBluePrimary.
     * Sets the image chromaticity blue primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageblueprimary.php
     */
    public function setImageBluePrimary(float $x, float $y): bool
    {
    }

    /**
     * setImageBorderColor.
     * Sets the image border color.
     *
     * @param mixed $border
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagebordercolor.php
     */
    public function setImageBorderColor(mixed $border): bool
    {
    }

    /**
     * setImageChannelDepth.
     * Sets the depth of a particular image channel.
     *
     * @param int $channel
     * @param int $depth
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagechanneldepth.php
     */
    public function setImageChannelDepth(int $channel, int $depth): bool
    {
    }

    /**
     * setImageClipMask.
     * Sets image clip mask.
     *
     * @param Imagick $clip_mask
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageclipmask.php
     */
    public function setImageClipMask(Imagick $clip_mask): bool
    {
    }

    /**
     * setImageColormapColor.
     * Sets the color of the specified colormap index.
     *
     * @param int          $index
     * @param ImagickPixel $color
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagecolormapcolor.php
     */
    public function setImageColormapColor(int $index, ImagickPixel $color): bool
    {
    }

    /**
     * setImageColorspace.
     * Sets the image colorspace.
     *
     * @param int $colorspace
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagecolorspace.php
     */
    public function setImageColorspace(int $colorspace): bool
    {
    }

    /**
     * setImageCompose.
     * Sets the image composite operator.
     *
     * @param int $compose
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagecompose.php
     */
    public function setImageCompose(int $compose): bool
    {
    }

    /**
     * setImageCompression.
     * Sets the image compression.
     *
     * @param int $compression
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagecompression.php
     */
    public function setImageCompression(int $compression): bool
    {
    }

    /**
     * setImageCompressionQuality.
     * Sets the image compression quality.
     *
     * @param int $quality
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagecompressionquality.php
     */
    public function setImageCompressionQuality(int $quality): bool
    {
    }

    /**
     * setImageDelay.
     * Sets the image delay.
     *
     * @param int $delay
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagedelay.php
     */
    public function setImageDelay(int $delay): bool
    {
    }

    /**
     * setImageDepth.
     * Sets the image depth.
     *
     * @param int $depth
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagedepth.php
     */
    public function setImageDepth(int $depth): bool
    {
    }

    /**
     * setImageDispose.
     * Sets the image disposal method.
     *
     * @param int $dispose
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagedispose.php
     */
    public function setImageDispose(int $dispose): bool
    {
    }

    /**
     * setImageExtent.
     * Sets the image size.
     *
     * @param int $columns
     * @param int $rows
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageextent.php
     */
    public function setImageExtent(int $columns, int $rows): bool
    {
    }

    /**
     * setImageFilename.
     * Sets the filename of a particular image.
     *
     * @param string $filename
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagefilename.php
     */
    public function setImageFilename(string $filename): bool
    {
    }

    /**
     * setImageFormat.
     * Sets the format of a particular image.
     *
     * @param string $format
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageformat.php
     */
    public function setImageFormat(string $format): bool
    {
    }

    /**
     * setImageGamma.
     * Sets the image gamma.
     *
     * @param float $gamma
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagegamma.php
     */
    public function setImageGamma(float $gamma): bool
    {
    }

    /**
     * setImageGravity.
     * Sets the image gravity.
     *
     * @param int $gravity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagegravity.php
     */
    public function setImageGravity(int $gravity): bool
    {
    }

    /**
     * setImageGreenPrimary.
     * Sets the image chromaticity green primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagegreenprimary.php
     */
    public function setImageGreenPrimary(float $x, float $y): bool
    {
    }

    /**
     * setImageIndex.
     * Set the iterator position.
     *
     * @param int $index
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageindex.php
     */
    public function setImageIndex(int $index): bool
    {
    }

    /**
     * setImageInterlaceScheme.
     * Sets the image compression.
     *
     * @param int $interlace_scheme
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageinterlacescheme.php
     */
    public function setImageInterlaceScheme(int $interlace_scheme): bool
    {
    }

    /**
     * setImageInterpolateMethod.
     * Sets the image interpolate pixel method.
     *
     * @param int $method
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageinterpolatemethod.php
     */
    public function setImageInterpolateMethod(int $method): bool
    {
    }

    /**
     * setImageIterations.
     * Sets the image iterations.
     *
     * @param int $iterations
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageiterations.php
     */
    public function setImageIterations(int $iterations): bool
    {
    }

    /**
     * setImageMatte.
     * Sets the image matte channel.
     *
     * @param bool $matte
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagematte.php
     */
    public function setImageMatte(bool $matte): bool
    {
    }

    /**
     * setImageMatteColor.
     * Sets the image matte color.
     *
     * @param mixed $matte
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagemattecolor.php
     */
    public function setImageMatteColor(mixed $matte): bool
    {
    }

    /**
     * setImageOpacity.
     * Sets the image opacity level.
     *
     * @param float $opacity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageopacity.php
     */
    public function setImageOpacity(float $opacity): bool
    {
    }

    /**
     * setImageOrientation.
     * Sets the image orientation.
     *
     * @param int $orientation
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageorientation.php
     */
    public function setImageOrientation(int $orientation): bool
    {
    }

    /**
     * setImagePage.
     * Sets the page geometry of the image.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagepage.php
     */
    public function setImagePage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * setImageProfile.
     * Adds a named profile to the Imagick object.
     *
     * @param string $name
     * @param string $profile
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageprofile.php
     */
    public function setImageProfile(string $name, string $profile): bool
    {
    }

    /**
     * setImageProperty.
     * Sets an image property.
     *
     * @param string $name
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageproperty.php
     */
    public function setImageProperty(string $name, string $value): bool
    {
    }

    /**
     * setImageRedPrimary.
     * Sets the image chromaticity red primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageredprimary.php
     */
    public function setImageRedPrimary(float $x, float $y): bool
    {
    }

    /**
     * setImageRenderingIntent.
     * Sets the image rendering intent.
     *
     * @param int $rendering_intent
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagerenderingintent.php
     */
    public function setImageRenderingIntent(int $rendering_intent): bool
    {
    }

    /**
     * setImageResolution.
     * Sets the image resolution.
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageresolution.php
     */
    public function setImageResolution(float $x_resolution, float $y_resolution): bool
    {
    }

    /**
     * setImageScene.
     * Sets the image scene.
     *
     * @param int $scene
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagescene.php
     */
    public function setImageScene(int $scene): bool
    {
    }

    /**
     * setImageTicksPerSecond.
     * Sets the image ticks-per-second.
     *
     * @param int $ticks_per_second
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagetickspersecond.php
     */
    public function setImageTicksPerSecond(int $ticks_per_second): bool
    {
    }

    /**
     * setImageType.
     * Sets the image type.
     *
     * @param int $image_type
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagetype.php
     */
    public function setImageType(int $image_type): bool
    {
    }

    /**
     * setImageUnits.
     * Sets the image units of resolution.
     *
     * @param int $units
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimageunits.php
     */
    public function setImageUnits(int $units): bool
    {
    }

    /**
     * setImageVirtualPixelMethod.
     * Sets the image virtual pixel method.
     *
     * @param int $method
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagevirtualpixelmethod.php
     */
    public function setImageVirtualPixelMethod(int $method): bool
    {
    }

    /**
     * setImageWhitePoint.
     * Sets the image chromaticity white point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setimagewhitepoint.php
     */
    public function setImageWhitePoint(float $x, float $y): bool
    {
    }

    /**
     * setInterlaceScheme.
     * Sets the image compression.
     *
     * @param int $interlace_scheme
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setinterlacescheme.php
     */
    public function setInterlaceScheme(int $interlace_scheme): bool
    {
    }

    /**
     * setIteratorIndex.
     * Set the iterator position.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setiteratorindex.php
     */
    public function setIteratorIndex(int $index): bool
    {
    }

    /**
     * setLastIterator.
     * Sets the Imagick iterator to the last image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setlastiterator.php
     */
    public function setLastIterator(): bool
    {
    }

    /**
     * setOption.
     * Set an option.
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setoption.php
     */
    public function setOption(string $key, string $value): bool
    {
    }

    /**
     * setPage.
     * Sets the page geometry of the Imagick object.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setpage.php
     */
    public function setPage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * setPointSize.
     * Sets point size.
     *
     * @param float $point_size
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setpointsize.php
     */
    public function setPointSize(float $point_size): bool
    {
    }

    /**
     * setProgressMonitor.
     * Description.
     *
     * @param callable $callback
     *
     * @see http://php.net/manual/en/imagick.setprogressmonitor.php
     */
    public function setProgressMonitor(callable $callback): void
    {
    }

    /**
     * setRegistry.
     * Description.
     *
     * @param string $key
     * @param string $value
     *
     * @see http://php.net/manual/en/imagick.setregistry.php
     */
    public static function setRegistry(string $key, string $value): void
    {
    }

    /**
     * setResolution.
     * Sets the image resolution.
     *
     * @param float $x_resolution
     * @param float $y_resolution
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setresolution.php
     */
    public function setResolution(float $x_resolution, float $y_resolution): bool
    {
    }

    /**
     * setResourceLimit.
     * Sets the limit for a particular resource in megabytes.
     *
     * @param int $type
     * @param int $limit
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setresourcelimit.php
     */
    public function setResourceLimit(int $type, int $limit): bool
    {
    }

    /**
     * setSamplingFactors.
     * Sets the image sampling factors.
     *
     * @param array $factors
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setsamplingfactors.php
     */
    public function setSamplingFactors(array $factors): bool
    {
    }

    /**
     * setSize.
     * Sets the size of the Imagick object.
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setsize.php
     */
    public function setSize(int $columns, int $rows): bool
    {
    }

    /**
     * setSizeOffset.
     * Sets the size and offset of the Imagick object.
     *
     * @param int $columns
     * @param int $rows
     * @param int $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.setsizeoffset.php
     */
    public function setSizeOffset(int $columns, int $rows, int $offset): bool
    {
    }

    /**
     * setType.
     * Sets the image type attribute.
     *
     * @param int $image_type
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.settype.php
     */
    public function setType(int $image_type): bool
    {
    }

    /**
     * shadeImage.
     * Creates a 3D effect.
     *
     * @param bool  $gray
     * @param float $azimuth
     * @param float $elevation
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.shadeimage.php
     */
    public function shadeImage(bool $gray, float $azimuth, float $elevation): bool
    {
    }

    /**
     * shadowImage.
     * Simulates an image shadow.
     *
     * @param float $opacity
     * @param float $sigma
     * @param int   $x
     * @param int   $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.shadowimage.php
     */
    public function shadowImage(float $opacity, float $sigma, int $x, int $y): bool
    {
    }

    /**
     * sharpenImage.
     * Sharpens an image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sharpenimage.php
     */
    public function sharpenImage(float $radius, float $sigma, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * shaveImage.
     * Shaves pixels from the image edges.
     *
     * @param int $columns
     * @param int $rows
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.shaveimage.php
     */
    public function shaveImage(int $columns, int $rows): bool
    {
    }

    /**
     * shearImage.
     * Creating a parallelogram.
     *
     * @param mixed $background
     * @param float $x_shear
     * @param float $y_shear
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.shearimage.php
     */
    public function shearImage(mixed $background, float $x_shear, float $y_shear): bool
    {
    }

    /**
     * sigmoidalContrastImage.
     * Adjusts the contrast of an image.
     *
     * @param bool  $sharpen
     * @param float $alpha
     * @param float $beta
     * @param int   $channel = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sigmoidalcontrastimage.php
     */
    public function sigmoidalContrastImage(bool $sharpen, float $alpha, float $beta, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * sketchImage.
     * Simulates a pencil sketch.
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sketchimage.php
     */
    public function sketchImage(float $radius, float $sigma, float $angle): bool
    {
    }

    /**
     * smushImages.
     * Description.
     *
     * @param string $stack
     * @param string $offset
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.smushimages.php
     */
    public function smushImages(string $stack, string $offset): Imagick
    {
    }

    /**
     * solarizeImage.
     * Applies a solarizing effect to the image.
     *
     * @param int $threshold
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.solarizeimage.php
     */
    public function solarizeImage(int $threshold): bool
    {
    }

    /**
     * sparseColorImage.
     * Interpolates colors.
     *
     * @param int   $SPARSE_METHOD
     * @param array $arguments
     * @param int   $channel       = Imagick::CHANNEL_DEFAULT
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.sparsecolorimage.php
     */
    public function sparseColorImage(int $SPARSE_METHOD, array $arguments, int $channel = self::CHANNEL_DEFAULT): bool
    {
    }

    /**
     * spliceImage.
     * Splices a solid color into the image.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.spliceimage.php
     */
    public function spliceImage(int $width, int $height, int $x, int $y): bool
    {
    }

    /**
     * spreadImage.
     * Randomly displaces each pixel in a block.
     *
     * @param float $radius
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.spreadimage.php
     */
    public function spreadImage(float $radius): bool
    {
    }

    /**
     * statisticImage.
     * Description.
     *
     * @param int    $type
     * @param int    $width
     * @param int    $height
     * @param string $CHANNEL = Imagick::CHANNEL_DEFAULT
     *
     * @see http://php.net/manual/en/imagick.statisticimage.php
     */
    public function statisticImage(int $type, int $width, int $height, string $CHANNEL = self::CHANNEL_DEFAULT): void
    {
    }

    /**
     * steganoImage.
     * Hides a digital watermark within the image.
     *
     * @param Imagick $watermark_wand
     * @param int     $offset
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.steganoimage.php
     */
    public function steganoImage(Imagick $watermark_wand, int $offset): Imagick
    {
    }

    /**
     * stereoImage.
     * Composites two images.
     *
     * @param Imagick $offset_wand
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.stereoimage.php
     */
    public function stereoImage(Imagick $offset_wand): bool
    {
    }

    /**
     * stripImage.
     * Strips an image of all profiles and comments.
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.stripimage.php
     */
    public function stripImage(): bool
    {
    }

    /**
     * subImageMatch.
     * Description.
     *
     * @param Imagick $Imagick
     * @param array   &$offset     (optional)
     * @param float   &$similarity (optional)
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.subimagematch.php
     */
    public function subImageMatch(Imagick $Imagick, array &$offset, float &$similarity): Imagick
    {
    }

    /**
     * swirlImage.
     * Swirls the pixels about the center of the image.
     *
     * @param float $degrees
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.swirlimage.php
     */
    public function swirlImage(float $degrees): bool
    {
    }

    /**
     * textureImage.
     * Repeatedly tiles the texture image.
     *
     * @param Imagick $texture_wand
     *
     * @throws ImagickException
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.textureimage.php
     */
    public function textureImage(Imagick $texture_wand): Imagick
    {
    }

    /**
     * thresholdImage.
     * Changes the value of individual pixels based on a threshold.
     *
     * @param float $threshold
     * @param int   $channel   = Imagick::CHANNEL_ALL
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.thresholdimage.php
     */
    public function thresholdImage(float $threshold, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * thumbnailImage.
     * Changes the size of an image.
     *
     * @param int  $columns
     * @param int  $rows
     * @param bool $bestfit = false
     * @param bool $fill    = false
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.thumbnailimage.php
     */
    public function thumbnailImage(int $columns, int $rows, bool $bestfit = false, bool $fill = false): bool
    {
    }

    /**
     * tintImage.
     * Applies a color vector to each pixel in the image.
     *
     * @param mixed $tint
     * @param mixed $opacity
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.tintimage.php
     */
    public function tintImage(mixed $tint, mixed $opacity): bool
    {
    }

    /**
     * transformImage.
     * Convenience method for setting crop size and the image geometry.
     *
     * @param string $crop
     * @param string $geometry
     *
     * @return Imagick
     *
     * @see http://php.net/manual/en/imagick.transformimage.php
     */
    public function transformImage(string $crop, string $geometry): Imagick
    {
    }

    /**
     * transformImageColorspace.
     * Transforms an image to a new colorspace.
     *
     * @param int $colorspace
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.transformimagecolorspace.php
     */
    public function transformImageColorspace(int $colorspace): bool
    {
    }

    /**
     * transparentPaintImage.
     * Paints pixels transparent.
     *
     * @param mixed $target
     * @param float $alpha
     * @param float $fuzz
     * @param bool  $invert
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.transparentpaintimage.php
     */
    public function transparentPaintImage(mixed $target, float $alpha, float $fuzz, bool $invert): bool
    {
    }

    /**
     * transposeImage.
     * Creates a vertical mirror image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.transposeimage.php
     */
    public function transposeImage(): bool
    {
    }

    /**
     * transverseImage.
     * Creates a horizontal mirror image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.transverseimage.php
     */
    public function transverseImage(): bool
    {
    }

    /**
     * trimImage.
     * Remove edges from the image.
     *
     * @param float $fuzz
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.trimimage.php
     */
    public function trimImage(float $fuzz): bool
    {
    }

    /**
     * uniqueImageColors.
     * Discards all but one of any pixel color.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.uniqueimagecolors.php
     */
    public function uniqueImageColors(): bool
    {
    }

    /**
     * unsharpMaskImage.
     * Sharpens an image.
     *
     * @param float $radius
     * @param float $sigma
     * @param float $amount
     * @param float $threshold
     * @param int   $channel   = Imagick::CHANNEL_ALL
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.unsharpmaskimage.php
     */
    public function unsharpMaskImage(float $radius, float $sigma, float $amount, float $threshold, int $channel = self::CHANNEL_ALL): bool
    {
    }

    /**
     * valid.
     * Checks if the current item is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.valid.php
     */
    public function valid(): bool
    {
    }

    /**
     * vignetteImage.
     * Adds vignette filter to the image.
     *
     * @param float $blackPoint
     * @param float $whitePoint
     * @param int   $x
     * @param int   $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.vignetteimage.php
     */
    public function vignetteImage(float $blackPoint, float $whitePoint, int $x, int $y): bool
    {
    }

    /**
     * waveImage.
     * Applies wave filter to the image.
     *
     * @param float $amplitude
     * @param float $length
     *
     * @throws ImagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.waveimage.php
     */
    public function waveImage(float $amplitude, float $length): bool
    {
    }

    /**
     * whiteThresholdImage.
     * Force all pixels above the threshold into white.
     *
     * @param mixed $threshold
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.whitethresholdimage.php
     */
    public function whiteThresholdImage(mixed $threshold): bool
    {
    }

    /**
     * writeImage.
     * Writes an image to the specified filename.
     *
     * @param string $filename = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.writeimage.php
     */
    public function writeImage(string $filename = null): bool
    {
    }

    /**
     * writeImageFile.
     * Writes an image to a filehandle.
     *
     * @param resource $filehandle
     *
     * @return bool
     *
     * @see
     */
    public function writeImageFile(resource $filehandle): bool
    {
    }

    /**
     * writeImages.
     * Writes an image or image sequence.
     *
     * @param string $filename
     * @param bool   $adjoin
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.writeimages.php
     */
    public function writeImages(string $filename, bool $adjoin): bool
    {
    }

    /**
     * writeImagesFile.
     * Writes frames to a filehandle.
     *
     * @param resource $filehandle
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagick.writeimagesfile.php
     */
    public function writeImagesFile(resource $filehandle): bool
    {
    }
}
