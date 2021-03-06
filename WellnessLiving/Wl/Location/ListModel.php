<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * List of locations available for selection.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of locations of current business. Fields - location's IDs. Values - object with fields:
   * <ul>
   *   <li>String <b>f_latitude</b> Latitude coordinate.</li>
   *   <li>String <b>f_longitude</b> Longitude coordinate.</li>
   *   <li>String <b>i_order</b> Display Order.</li>
   *   <li>String <b>k_location</b> Location ID.</li>
   *   <li>String <b>s_title</b> Location title.</li>
   *   <li>String <b>text_address</b> Location's physical address.</li>
   *   <li>String <b>url_logo</b> Location logotype.</li>
   *   <li>String <b>url_slide</b> First image from location photo slider.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_location = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>