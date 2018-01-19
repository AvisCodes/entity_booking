<?php

namespace Drupal\entity_booking\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Booking entities.
 */
class BookingViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
