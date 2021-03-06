<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlAssertException;

/**
 * Contains WellnessLiving SDK configuration.
 *
 * To use it, create a class that inherits this class, and override constants.
 */
abstract class WlConfigAbstract
{
  /**
   * URL of the server (including trailing slash).
   */
  public const AGENT='WellnessLiving SDK/1.0 (WellnessLiving SDK)';

  /**
   * Secret code to authorize application.
   *
   * @var string
   */
  public const AUTHORIZE_CODE=null;

  /**
   * Application ID.
   *
   * @var string
   */
  public const AUTHORIZE_ID=null;

  /**
   * Name of a persistent cookie.
   */
  public const COOKIE_PERSISTENT='sp';

  /**
   * Name of a transient cookie.
   */
  public const COOKIE_TRANSIENT='st';

  /**
   * Timeout to wait for connection to establish.
   */
  public const TIMEOUT_CONNECT=60;

  /**
   * Timeout to wait for data reading from an established connection.
   */
  public const TIMEOUT_READ=600;

  /**
   * URL of the server (including trailing slash).
   */
  public const URL='https://staging.wellnessliving.com/';

  /**
   * Asserts that configuration object is configured correctly.
   *
   * @throws WlAssertException In a case of an error with configuration settings.
   */
  public function assertValid():void
  {
    WlAssertException::assertTrue(is_string($this::COOKIE_PERSISTENT)&&$this::COOKIE_PERSISTENT,[
      'text_message' => get_class($this).'::COOKIE_PERSISTENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::COOKIE_TRANSIENT)&&$this::COOKIE_TRANSIENT,[
      'text_message' => get_class($this).'::COOKIE_TRANSIENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::URL)&&$this::URL,[
      'text_message' => get_class($this).'::URL is not set.'
    ]);
  }
}