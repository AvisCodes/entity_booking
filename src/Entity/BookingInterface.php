<?php

namespace Drupal\entity_booking\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Booking entities.
 *
 * @ingroup entity_booking
 */
interface BookingInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Booking name.
   *
   * @return string
   *   Name of the Booking.
   */
  public function getName();

  /**
   * Sets the Booking name.
   *
   * @param string $name
   *   The Booking name.
   *
   * @return \Drupal\entity_booking\Entity\BookingInterface
   *   The called Booking entity.
   */
  public function setName($name);

  /**
   * Gets the Booking creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Booking.
   */
  public function getCreatedTime();

  /**
   * Sets the Booking creation timestamp.
   *
   * @param int $timestamp
   *   The Booking creation timestamp.
   *
   * @return \Drupal\entity_booking\Entity\BookingInterface
   *   The called Booking entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Booking published status indicator.
   *
   * Unpublished Booking are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Booking is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Booking.
   *
   * @param bool $published
   *   TRUE to set this Booking to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\entity_booking\Entity\BookingInterface
   *   The called Booking entity.
   */
  public function setPublished($published);

}
