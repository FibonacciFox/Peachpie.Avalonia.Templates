<?php
namespace Avalonia\Skia;
/**
 */
class SurfaceWrapper extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurface
{
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget
	 */
	public  function CreateGlRenderTarget($context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
