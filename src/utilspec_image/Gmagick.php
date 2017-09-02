<?php

/**
 * Gmagick.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gmagick.php
 */
class Gmagick
{
    /**
     * __construct.
     * The Gmagick constructor.
     *
     * @param string $filename (optional)
     *
     * @throws GmagickException
     *
     * @see http://php.net/manual/en/gmagick.construct.php
     */
    public function __construct(string $filename)
    {
    }

    /**
     * addimage.
     * Adds new image to Gmagick object image list.
     *
     * @param Gmagick $source
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.addimage.php
     */
    public function addimage(Gmagick $source): Gmagick
    {
    }

    /**
     * addnoiseimage.
     * Adds random noise to the image.
     *
     * @param int $noise_type
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.addnoiseimage.php
     */
    public function addnoiseimage(int $noise_type): Gmagick
    {
    }

    /**
     * annotateimage.
     * Annotates an image with text.
     *
     * @param GmagickDraw $GmagickDraw
     * @param float       $x
     * @param float       $y
     * @param float       $angle
     * @param string      $text
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.annotateimage.php
     */
    public function annotateimage(GmagickDraw $GmagickDraw, float $x, float $y, float $angle, string $text): Gmagick
    {
    }

    /**
     * blurimage.
     * Adds blur filter to image.
     *
     * @param float $radius
     * @param float $sigma
     * @param int   $channel (optional)
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.blurimage.php
     */
    public function blurimage(float $radius, float $sigma, int $channel): Gmagick
    {
    }

    /**
     * borderimage.
     * Surrounds the image with a border.
     *
     * @param GmagickPixel $color
     * @param int          $width
     * @param int          $height
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.borderimage.php
     */
    public function borderimage(GmagickPixel $color, int $width, int $height): Gmagick
    {
    }

    /**
     * charcoalimage.
     * Simulates a charcoal drawing.
     *
     * @param float $radius
     * @param float $sigma
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.charcoalimage.php
     */
    public function charcoalimage(float $radius, float $sigma): Gmagick
    {
    }

    /**
     * chopimage.
     * Removes a region of an image and trims.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.chopimage.php
     */
    public function chopimage(int $width, int $height, int $x, int $y): Gmagick
    {
    }

    /**
     * clear.
     * Clears all resources associated to Gmagick object.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.clear.php
     */
    public function clear(): Gmagick
    {
    }

    /**
     * commentimage.
     * Adds a comment to your image.
     *
     * @param string $comment
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.commentimage.php
     */
    public function commentimage(string $comment): Gmagick
    {
    }

    /**
     * compositeimage.
     * Composite one image onto another.
     *
     * @param Gmagick $source
     * @param int     $COMPOSE
     * @param int     $x
     * @param int     $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.compositeimage.php
     */
    public function compositeimage(Gmagick $source, int $COMPOSE, int $x, int $y): Gmagick
    {
    }

    /**
     * cropimage.
     * Extracts a region of the image.
     *
     * @param int $width
     * @param int $height
     * @param int $x
     * @param int $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.cropimage.php
     */
    public function cropimage(int $width, int $height, int $x, int $y): Gmagick
    {
    }

    /**
     * cropthumbnailimage.
     * Creates a crop thumbnail.
     *
     * @param int $width
     * @param int $height
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.cropthumbnailimage.php
     */
    public function cropthumbnailimage(int $width, int $height): Gmagick
    {
    }

    /**
     * current.
     * The current purpose.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.current.php
     */
    public function current(): Gmagick
    {
    }

    /**
     * cyclecolormapimage.
     * Displaces an image's colormap.
     *
     * @param int $displace
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.cyclecolormapimage.php
     */
    public function cyclecolormapimage(int $displace): Gmagick
    {
    }

    /**
     * deconstructimages.
     * Returns certain pixel differences between images.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.deconstructimages.php
     */
    public function deconstructimages(): Gmagick
    {
    }

    /**
     * despeckleimage.
     * The despeckleimage purpose.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.despeckleimage.php
     */
    public function despeckleimage(): Gmagick
    {
    }

    /**
     * destroy.
     * The destroy purpose.
     *
     * @throws GmagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gmagick.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * drawimage.
     * Renders the GmagickDraw object on the current image.
     *
     * @param GmagickDraw $GmagickDraw
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.drawimage.php
     */
    public function drawimage(GmagickDraw $GmagickDraw): Gmagick
    {
    }

    /**
     * edgeimage.
     * Enhance edges within the image.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.edgeimage.php
     */
    public function edgeimage(float $radius): Gmagick
    {
    }

    /**
     * embossimage.
     * Returns a grayscale image with a three-dimensional effect.
     *
     * @param float $radius
     * @param float $sigma
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.embossimage.php
     */
    public function embossimage(float $radius, float $sigma): Gmagick
    {
    }

    /**
     * enhanceimage.
     * Improves the quality of a noisy image.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.enhanceimage.php
     */
    public function enhanceimage(): Gmagick
    {
    }

    /**
     * equalizeimage.
     * Equalizes the image histogram.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.equalizeimage.php
     */
    public function equalizeimage(): Gmagick
    {
    }

    /**
     * flipimage.
     * Creates a vertical mirror image.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.flipimage.php
     */
    public function flipimage(): Gmagick
    {
    }

    /**
     * flopimage.
     * The flopimage purpose.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.flopimage.php
     */
    public function flopimage(): Gmagick
    {
    }

    /**
     * frameimage.
     * Adds a simulated three-dimensional border.
     *
     * @param GmagickPixel $color
     * @param int          $width
     * @param int          $height
     * @param int          $inner_bevel
     * @param int          $outer_bevel
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.frameimage.php
     */
    public function frameimage(GmagickPixel $color, int $width, int $height, int $inner_bevel, int $outer_bevel): Gmagick
    {
    }

    /**
     * gammaimage.
     * Gamma-corrects an image.
     *
     * @param float $gamma
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.gammaimage.php
     */
    public function gammaimage(float $gamma): Gmagick
    {
    }

    /**
     * getcopyright.
     * Returns the GraphicsMagick API copyright as a string.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getcopyright.php
     */
    public function getcopyright(): string
    {
    }

    /**
     * getfilename.
     * The filename associated with an image sequence.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getfilename.php
     */
    public function getfilename(): string
    {
    }

    /**
     * getimagebackgroundcolor.
     * Returns the image background color.
     *
     * @throws GmagickException
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagick.getimagebackgroundcolor.php
     */
    public function getimagebackgroundcolor(): GmagickPixel
    {
    }

    /**
     * getimageblueprimary.
     * Returns the chromaticy blue primary point.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimageblueprimary.php
     */
    public function getimageblueprimary(): array
    {
    }

    /**
     * getimagebordercolor.
     * Returns the image border color.
     *
     * @throws GmagickException
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagick.getimagebordercolor.php
     */
    public function getimagebordercolor(): GmagickPixel
    {
    }

    /**
     * getimagechanneldepth.
     * Gets the depth for a particular image channel.
     *
     * @param int $channel_type
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagechanneldepth.php
     */
    public function getimagechanneldepth(int $channel_type): int
    {
    }

    /**
     * getimagecolors.
     * Returns the color of the specified colormap index.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagecolors.php
     */
    public function getimagecolors(): int
    {
    }

    /**
     * getimagecolorspace.
     * Gets the image colorspace.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagecolorspace.php
     */
    public function getimagecolorspace(): int
    {
    }

    /**
     * getimagecompose.
     * Returns the composite operator associated with the image.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagecompose.php
     */
    public function getimagecompose(): int
    {
    }

    /**
     * getimagedelay.
     * Gets the image delay.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagedelay.php
     */
    public function getimagedelay(): int
    {
    }

    /**
     * getimagedepth.
     * Gets the depth of the image.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagedepth.php
     */
    public function getimagedepth(): int
    {
    }

    /**
     * getimagedispose.
     * Gets the image disposal method.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagedispose.php
     */
    public function getimagedispose(): int
    {
    }

    /**
     * getimageextrema.
     * Gets the extrema for the image.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimageextrema.php
     */
    public function getimageextrema(): array
    {
    }

    /**
     * getimagefilename.
     * Returns the filename of a particular image in a sequence.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getimagefilename.php
     */
    public function getimagefilename(): string
    {
    }

    /**
     * getimageformat.
     * Returns the format of a particular image in a sequence.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getimageformat.php
     */
    public function getimageformat(): string
    {
    }

    /**
     * getimagegamma.
     * Gets the image gamma.
     *
     * @throws GmagickException
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagick.getimagegamma.php
     */
    public function getimagegamma(): float
    {
    }

    /**
     * getimagegreenprimary.
     * Returns the chromaticy green primary point.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimagegreenprimary.php
     */
    public function getimagegreenprimary(): array
    {
    }

    /**
     * getimageheight.
     * Returns the image height.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimageheight.php
     */
    public function getimageheight(): int
    {
    }

    /**
     * getimagehistogram.
     * Gets the image histogram.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimagehistogram.php
     */
    public function getimagehistogram(): array
    {
    }

    /**
     * getimageindex.
     * Gets the index of the current active image.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimageindex.php
     */
    public function getimageindex(): int
    {
    }

    /**
     * getimageinterlacescheme.
     * Gets the image interlace scheme.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimageinterlacescheme.php
     */
    public function getimageinterlacescheme(): int
    {
    }

    /**
     * getimageiterations.
     * Gets the image iterations.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimageiterations.php
     */
    public function getimageiterations(): int
    {
    }

    /**
     * getimagematte.
     * Check if the image has a matte channel.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagematte.php
     */
    public function getimagematte(): int
    {
    }

    /**
     * getimagemattecolor.
     * Returns the image matte color.
     *
     * @throws GmagickException
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagick.getimagemattecolor.php
     */
    public function getimagemattecolor(): GmagickPixel
    {
    }

    /**
     * getimageprofile.
     * Returns the named image profile.
     *
     * @param string $name
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getimageprofile.php
     */
    public function getimageprofile(string $name): string
    {
    }

    /**
     * getimageredprimary.
     * Returns the chromaticity red primary point.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimageredprimary.php
     */
    public function getimageredprimary(): array
    {
    }

    /**
     * getimagerenderingintent.
     * Gets the image rendering intent.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagerenderingintent.php
     */
    public function getimagerenderingintent(): int
    {
    }

    /**
     * getimageresolution.
     * Gets the image X and Y resolution.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimageresolution.php
     */
    public function getimageresolution(): array
    {
    }

    /**
     * getimagescene.
     * Gets the image scene.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagescene.php
     */
    public function getimagescene(): int
    {
    }

    /**
     * getimagesignature.
     * Generates an SHA-256 message digest.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getimagesignature.php
     */
    public function getimagesignature(): string
    {
    }

    /**
     * getimagetype.
     * Gets the potential image type.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagetype.php
     */
    public function getimagetype(): int
    {
    }

    /**
     * getimageunits.
     * Gets the image units of resolution.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimageunits.php
     */
    public function getimageunits(): int
    {
    }

    /**
     * getimagewhitepoint.
     * Returns the chromaticity white point.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getimagewhitepoint.php
     */
    public function getimagewhitepoint(): array
    {
    }

    /**
     * getimagewidth.
     * Returns the width of the image.
     *
     * @throws GmagickException
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagick.getimagewidth.php
     */
    public function getimagewidth(): int
    {
    }

    /**
     * getpackagename.
     * Returns the GraphicsMagick package name.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getpackagename.php
     */
    public function getpackagename(): string
    {
    }

    /**
     * getquantumdepth.
     * Returns the Gmagick quantum depth as a string.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getquantumdepth.php
     */
    public function getquantumdepth(): array
    {
    }

    /**
     * getreleasedate.
     * Returns the GraphicsMagick release date as a string.
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.getreleasedate.php
     */
    public function getreleasedate(): string
    {
    }

    /**
     * getsamplingfactors.
     * Gets the horizontal and vertical sampling factor.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getsamplingfactors.php
     */
    public function getsamplingfactors(): array
    {
    }

    /**
     * getsize.
     * Returns the size associated with the Gmagick object.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getsize.php
     */
    public function getsize(): array
    {
    }

    /**
     * getversion.
     * Returns the GraphicsMagick API version.
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.getversion.php
     */
    public function getversion(): array
    {
    }

    /**
     * hasnextimage.
     * Checks if the object has more images.
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.hasnextimage.php
     */
    public function hasnextimage(): mixed
    {
    }

    /**
     * haspreviousimage.
     * Checks if the object has a previous image.
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.haspreviousimage.php
     */
    public function haspreviousimage(): mixed
    {
    }

    /**
     * implodeimage.
     * Creates a new image as a copy.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.implodeimage.php
     */
    public function implodeimage(float $radius): mixed
    {
    }

    /**
     * labelimage.
     * Adds a label to an image.
     *
     * @param string $label
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.labelimage.php
     */
    public function labelimage(string $label): mixed
    {
    }

    /**
     * levelimage.
     * Adjusts the levels of an image.
     *
     * @param float $blackPoint
     * @param float $gamma
     * @param float $whitePoint
     * @param int   $channel    = CHANNEL_DEFAULT
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.levelimage.php
     */
    public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = CHANNEL_DEFAULT): mixed
    {
    }

    /**
     * magnifyimage.
     * Scales an image proportionally 2x.
     *
     * @throws GmagickException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagick.magnifyimage.php
     */
    public function magnifyimage(): mixed
    {
    }

    /**
     * mapimage.
     * Replaces the colors of an image with the closest color from a reference image.
     *
     * @param Gmagick $gmagick
     * @param bool    $dither
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.mapimage.php
     */
    public function mapimage(Gmagick $gmagick, bool $dither): Gmagick
    {
    }

    /**
     * medianfilterimage.
     * Applies a digital filter.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @see http://php.net/manual/en/gmagick.medianfilterimage.php
     */
    public function medianfilterimage(float $radius): void
    {
    }

    /**
     * minifyimage.
     * Scales an image proportionally to half its size.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.minifyimage.php
     */
    public function minifyimage(): Gmagick
    {
    }

    /**
     * modulateimage.
     * Control the brightness, saturation, and hue.
     *
     * @param float $brightness
     * @param float $saturation
     * @param float $hue
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.modulateimage.php
     */
    public function modulateimage(float $brightness, float $saturation, float $hue): Gmagick
    {
    }

    /**
     * motionblurimage.
     * Simulates motion blur.
     *
     * @param float $radius
     * @param float $sigma
     * @param float $angle
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.motionblurimage.php
     */
    public function motionblurimage(float $radius, float $sigma, float $angle): Gmagick
    {
    }

    /**
     * newimage.
     * Creates a new image.
     *
     * @param int    $width
     * @param int    $height
     * @param string $background
     * @param string $format     (optional)
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.newimage.php
     */
    public function newimage(int $width, int $height, string $background, string $format): Gmagick
    {
    }

    /**
     * nextimage.
     * Moves to the next image.
     *
     * @throws GmagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gmagick.nextimage.php
     */
    public function nextimage(): bool
    {
    }

    /**
     * normalizeimage.
     * Enhances the contrast of a color image.
     *
     * @param int $channel (optional)
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.normalizeimage.php
     */
    public function normalizeimage(int $channel): Gmagick
    {
    }

    /**
     * oilpaintimage.
     * Simulates an oil painting.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.oilpaintimage.php
     */
    public function oilpaintimage(float $radius): Gmagick
    {
    }

    /**
     * previousimage.
     * Move to the previous image in the object.
     *
     * @throws GmagickException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gmagick.previousimage.php
     */
    public function previousimage(): bool
    {
    }

    /**
     * profileimage.
     * Adds or removes a profile from an image.
     *
     * @param string $name
     * @param string $profile
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.profileimage.php
     */
    public function profileimage(string $name, string $profile): Gmagick
    {
    }

    /**
     * quantizeimage.
     * Analyzes the colors within a reference image.
     *
     * @param int  $numColors
     * @param int  $colorspace
     * @param int  $treeDepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.quantizeimage.php
     */
    public function quantizeimage(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): Gmagick
    {
    }

    /**
     * quantizeimages.
     * The quantizeimages purpose.
     *
     * @param int  $numColors
     * @param int  $colorspace
     * @param int  $treeDepth
     * @param bool $dither
     * @param bool $measureError
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.quantizeimages.php
     */
    public function quantizeimages(int $numColors, int $colorspace, int $treeDepth, bool $dither, bool $measureError): Gmagick
    {
    }

    /**
     * queryfontmetrics.
     * Returns an array representing the font metrics.
     *
     * @param GmagickDraw $draw
     * @param string      $text
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.queryfontmetrics.php
     */
    public function queryfontmetrics(GmagickDraw $draw, string $text): array
    {
    }

    /**
     * queryfonts.
     * Returns the configured fonts.
     *
     * @param string $pattern = '*'
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.queryfonts.php
     */
    public function queryfonts(string $pattern = '*'): array
    {
    }

    /**
     * queryformats.
     * Returns formats supported by Gmagick.
     *
     * @param string $pattern = '*'
     *
     * @throws GmagickException
     *
     * @return array
     *
     * @see http://php.net/manual/en/gmagick.queryformats.php
     */
    public function queryformats(string $pattern = '*'): array
    {
    }

    /**
     * radialblurimage.
     * Radial blurs an image.
     *
     * @param float $angle
     * @param int   $channel = CHANNEL_DEFAULT
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.radialblurimage.php
     */
    public function radialblurimage(float $angle, int $channel = CHANNEL_DEFAULT): Gmagick
    {
    }

    /**
     * raiseimage.
     * Creates a simulated 3d button-like effect.
     *
     * @param int  $width
     * @param int  $height
     * @param int  $x
     * @param int  $y
     * @param bool $raise
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.raiseimage.php
     */
    public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): Gmagick
    {
    }

    /**
     * read.
     * Reads image from filename.
     *
     * @param string $filename
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.read.php
     */
    public function read(string $filename): Gmagick
    {
    }

    /**
     * readimage.
     * Reads image from filename.
     *
     * @param string $filename
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.readimage.php
     */
    public function readimage(string $filename): Gmagick
    {
    }

    /**
     * readimageblob.
     * Reads image from a binary string.
     *
     * @param string $imageContents
     * @param string $filename      (optional)
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.readimageblob.php
     */
    public function readimageblob(string $imageContents, string $filename): Gmagick
    {
    }

    /**
     * readimagefile.
     * The readimagefile purpose.
     *
     * @param resource $fp
     * @param string   $filename (optional)
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.readimagefile.php
     */
    public function readimagefile(resource $fp, string $filename): Gmagick
    {
    }

    /**
     * reducenoiseimage.
     * Smooths the contours of an image.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.reducenoiseimage.php
     */
    public function reducenoiseimage(float $radius): Gmagick
    {
    }

    /**
     * removeimage.
     * Removes an image from the image list.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.removeimage.php
     */
    public function removeimage(): Gmagick
    {
    }

    /**
     * removeimageprofile.
     * Removes the named image profile and returns it.
     *
     * @param string $name
     *
     * @throws GmagickException
     *
     * @return string
     *
     * @see http://php.net/manual/en/gmagick.removeimageprofile.php
     */
    public function removeimageprofile(string $name): string
    {
    }

    /**
     * resampleimage.
     * Resample image to desired resolution.
     *
     * @param float $xResolution
     * @param float $yResolution
     * @param int   $filter
     * @param float $blur
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.resampleimage.php
     */
    public function resampleimage(float $xResolution, float $yResolution, int $filter, float $blur): Gmagick
    {
    }

    /**
     * resizeimage.
     * Scales an image.
     *
     * @param int   $width
     * @param int   $height
     * @param int   $filter
     * @param float $blur
     * @param bool  $fit    = false
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.resizeimage.php
     */
    public function resizeimage(int $width, int $height, int $filter, float $blur, bool $fit = false): Gmagick
    {
    }

    /**
     * rollimage.
     * Offsets an image.
     *
     * @param int $x
     * @param int $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.rollimage.php
     */
    public function rollimage(int $x, int $y): Gmagick
    {
    }

    /**
     * rotateimage.
     * Rotates an image.
     *
     * @param mixed $color
     * @param float $degrees
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.rotateimage.php
     */
    public function rotateimage(mixed $color, float $degrees): Gmagick
    {
    }

    /**
     * scaleimage.
     * Scales the size of an image.
     *
     * @param int  $width
     * @param int  $height
     * @param bool $fit    = false
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.scaleimage.php
     */
    public function scaleimage(int $width, int $height, bool $fit = false): Gmagick
    {
    }

    /**
     * separateimagechannel.
     * Separates a channel from the image.
     *
     * @param int $channel
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.separateimagechannel.php
     */
    public function separateimagechannel(int $channel): Gmagick
    {
    }

    /**
     * setCompressionQuality.
     * Sets the object's default compression quality.
     *
     * @param int $quality = 75
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setcompressionquality.php
     */
    public function setCompressionQuality(int $quality = 75): Gmagick
    {
    }

    /**
     * setfilename.
     * Sets the filename before you read or write the image.
     *
     * @param string $filename
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setfilename.php
     */
    public function setfilename(string $filename): Gmagick
    {
    }

    /**
     * setimagebackgroundcolor.
     * Sets the image background color.
     *
     * @param GmagickPixel $color
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagebackgroundcolor.php
     */
    public function setimagebackgroundcolor(GmagickPixel $color): Gmagick
    {
    }

    /**
     * setimageblueprimary.
     * Sets the image chromaticity blue primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageblueprimary.php
     */
    public function setimageblueprimary(float $x, float $y): Gmagick
    {
    }

    /**
     * setimagebordercolor.
     * Sets the image border color.
     *
     * @param GmagickPixel $color
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagebordercolor.php
     */
    public function setimagebordercolor(GmagickPixel $color): Gmagick
    {
    }

    /**
     * setimagechanneldepth.
     * Sets the depth of a particular image channel.
     *
     * @param int $channel
     * @param int $depth
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagechanneldepth.php
     */
    public function setimagechanneldepth(int $channel, int $depth): Gmagick
    {
    }

    /**
     * setimagecolorspace.
     * Sets the image colorspace.
     *
     * @param int $colorspace
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagecolorspace.php
     */
    public function setimagecolorspace(int $colorspace): Gmagick
    {
    }

    /**
     * setimagecompose.
     * Sets the image composite operator.
     *
     * @param int $composite
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagecompose.php
     */
    public function setimagecompose(int $composite): Gmagick
    {
    }

    /**
     * setimagedelay.
     * Sets the image delay.
     *
     * @param int $delay
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagedelay.php
     */
    public function setimagedelay(int $delay): Gmagick
    {
    }

    /**
     * setimagedepth.
     * Sets the image depth.
     *
     * @param int $depth
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagedepth.php
     */
    public function setimagedepth(int $depth): Gmagick
    {
    }

    /**
     * setimagedispose.
     * Sets the image disposal method.
     *
     * @param int $disposeType
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagedispose.php
     */
    public function setimagedispose(int $disposeType): Gmagick
    {
    }

    /**
     * setimagefilename.
     * Sets the filename of a particular image in a sequence.
     *
     * @param string $filename
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagefilename.php
     */
    public function setimagefilename(string $filename): Gmagick
    {
    }

    /**
     * setimageformat.
     * Sets the format of a particular image.
     *
     * @param string $imageFormat
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageformat.php
     */
    public function setimageformat(string $imageFormat): Gmagick
    {
    }

    /**
     * setimagegamma.
     * Sets the image gamma.
     *
     * @param float $gamma
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagegamma.php
     */
    public function setimagegamma(float $gamma): Gmagick
    {
    }

    /**
     * setimagegreenprimary.
     * Sets the image chromaticity green primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagegreenprimary.php
     */
    public function setimagegreenprimary(float $x, float $y): Gmagick
    {
    }

    /**
     * setimageindex.
     * Set the iterator to the position in the image list specified with the index parameter.
     *
     * @param int $index
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageindex.php
     */
    public function setimageindex(int $index): Gmagick
    {
    }

    /**
     * setimageinterlacescheme.
     * Sets the interlace scheme of the image.
     *
     * @param int $interlace
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageinterlacescheme.php
     */
    public function setimageinterlacescheme(int $interlace): Gmagick
    {
    }

    /**
     * setimageiterations.
     * Sets the image iterations.
     *
     * @param int $iterations
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageiterations.php
     */
    public function setimageiterations(int $iterations): Gmagick
    {
    }

    /**
     * setimageprofile.
     * Adds a named profile to the Gmagick object.
     *
     * @param string $name
     * @param string $profile
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageprofile.php
     */
    public function setimageprofile(string $name, string $profile): Gmagick
    {
    }

    /**
     * setimageredprimary.
     * Sets the image chromaticity red primary point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageredprimary.php
     */
    public function setimageredprimary(float $x, float $y): Gmagick
    {
    }

    /**
     * setimagerenderingintent.
     * Sets the image rendering intent.
     *
     * @param int $rendering_intent
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagerenderingintent.php
     */
    public function setimagerenderingintent(int $rendering_intent): Gmagick
    {
    }

    /**
     * setimageresolution.
     * Sets the image resolution.
     *
     * @param float $xResolution
     * @param float $yResolution
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageresolution.php
     */
    public function setimageresolution(float $xResolution, float $yResolution): Gmagick
    {
    }

    /**
     * setimagescene.
     * Sets the image scene.
     *
     * @param int $scene
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagescene.php
     */
    public function setimagescene(int $scene): Gmagick
    {
    }

    /**
     * setimagetype.
     * Sets the image type.
     *
     * @param int $imgType
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagetype.php
     */
    public function setimagetype(int $imgType): Gmagick
    {
    }

    /**
     * setimageunits.
     * Sets the image units of resolution.
     *
     * @param int $resolution
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimageunits.php
     */
    public function setimageunits(int $resolution): Gmagick
    {
    }

    /**
     * setimagewhitepoint.
     * Sets the image chromaticity white point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setimagewhitepoint.php
     */
    public function setimagewhitepoint(float $x, float $y): Gmagick
    {
    }

    /**
     * setsamplingfactors.
     * Sets the image sampling factors.
     *
     * @param array $factors
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setsamplingfactors.php
     */
    public function setsamplingfactors(array $factors): Gmagick
    {
    }

    /**
     * setsize.
     * Sets the size of the Gmagick object.
     *
     * @param int $columns
     * @param int $rows
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.setsize.php
     */
    public function setsize(int $columns, int $rows): Gmagick
    {
    }

    /**
     * shearimage.
     * Creating a parallelogram.
     *
     * @param mixed $color
     * @param float $xShear
     * @param float $yShear
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.shearimage.php
     */
    public function shearimage(mixed $color, float $xShear, float $yShear): Gmagick
    {
    }

    /**
     * solarizeimage.
     * Applies a solarizing effect to the image.
     *
     * @param int $threshold
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.solarizeimage.php
     */
    public function solarizeimage(int $threshold): Gmagick
    {
    }

    /**
     * spreadimage.
     * Randomly displaces each pixel in a block.
     *
     * @param float $radius
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.spreadimage.php
     */
    public function spreadimage(float $radius): Gmagick
    {
    }

    /**
     * stripimage.
     * Strips an image of all profiles and comments.
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.stripimage.php
     */
    public function stripimage(): Gmagick
    {
    }

    /**
     * swirlimage.
     * Swirls the pixels about the center of the image.
     *
     * @param float $degrees
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.swirlimage.php
     */
    public function swirlimage(float $degrees): Gmagick
    {
    }

    /**
     * thumbnailimage.
     * Changes the size of an image.
     *
     * @param int  $width
     * @param int  $height
     * @param bool $fit    = false
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.thumbnailimage.php
     */
    public function thumbnailimage(int $width, int $height, bool $fit = false): Gmagick
    {
    }

    /**
     * trimimage.
     * Remove edges from the image.
     *
     * @param float $fuzz
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.trimimage.php
     */
    public function trimimage(float $fuzz): Gmagick
    {
    }

    /**
     * writeimage.
     * Writes an image to the specified filename.
     *
     * @param string $filename
     * @param bool   $all_frames = false
     *
     * @throws GmagickException
     *
     * @return Gmagick
     *
     * @see http://php.net/manual/en/gmagick.writeimage.php
     */
    public function writeimage(string $filename, bool $all_frames = false): Gmagick
    {
    }

    /**
     * write.
     *
     * @alias Gmagick::writeimage
     *
     * @see http://php.net/manual/en/gmagick.write.php
     */
    public function write(string $filename, bool $all_frames = false): Gmagick
    {
    }
}
