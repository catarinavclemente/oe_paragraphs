<?php

declare(strict_types = 1);

namespace Drupal\oe_paragraphs\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\oe_paragraphs\Event\FlagOptionsEvent;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides options for the flag field.
 */
class FlagOptionsSubscriber implements EventSubscriberInterface {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    return [
      FlagOptionsEvent::class => 'getFlagOptions',
    ];
  }

  /**
   * Gets the flag options.
   *
   * @param \Drupal\oe_paragraphs_illustrations_lists\Event\FlagOptionsEvent $event
   *   Allowed format event object.
   */
  public function getFlagOptions(FlagOptionsEvent $event): void {
    $event->setFlagOptions([
      'austria-square' => $this->t('Austria square'),
      'austria' => $this->t('Austria'),
      'belgium-square' => $this->t('Belgium square'),
      'belgium' => $this->t('Belgium'),
      'bulgaria-square' => $this->t('Bulgaria square'),
      'bulgaria' => $this->t('Bulgaria'),
      'croatia-square' => $this->t('Croatia square'),
      'croatia' => $this->t('Croatia'),
      'cyprus-square' => $this->t('Cyprus square'),
      'cyprus' => $this->t('Cyprus'),
      'czech-republic-square' => $this->t('Czech republic square'),
      'czech-republic' => $this->t('Czech republic'),
      'denmark-square' => $this->t('Denmark square'),
      'denmark' => $this->t('Denmark'),
      'estonia-square' => $this->t('Estonia square'),
      'estonia' => $this->t('Estonia'),
      'EU-square' => $this->t('EU-square'),
      'EU' => $this->t('EU'),
      'finland-square' => $this->t('Finland square'),
      'finland' => $this->t('Finland'),
      'france-square' => $this->t('France square'),
      'france' => $this->t('France'),
      'germany-square' => $this->t('Germany square'),
      'germany' => $this->t('Germany'),
      'greece-square' => $this->t('Greece square'),
      'greece' => $this->t('Greece'),
      'hungary-square' => $this->t('Hungary square'),
      'hungary' => $this->t('Hungary'),
      'ireland-square' => $this->t('Ireland square'),
      'ireland' => $this->t('Ireland'),
      'italy-square' => $this->t('Italy square'),
      'italy' => $this->t('Italy'),
      'latvia-square' => $this->t('Latvia square'),
      'latvia' => $this->t('Latvia'),
      'lithuania-square' => $this->t('Lithuania square'),
      'lithuania' => $this->t('Lithuania'),
      'luxembourg-square' => $this->t('Luxembourg square'),
      'luxembourg' => $this->t('Luxembourg'),
      'malta-square' => $this->t('Malta square'),
      'malta' => $this->t('Malta'),
      'netherlands-square' => $this->t('Netherlands square'),
      'netherlands' => $this->t('Netherlands'),
      'poland-square' => $this->t('Poland square'),
      'poland' => $this->t('Poland'),
      'portugal-square' => $this->t('Portugal square'),
      'portugal' => $this->t('Portugal'),
      'romania-square' => $this->t('Romania square'),
      'romania' => $this->t('Romania'),
      'slovakia-square' => $this->t('Slovakia square'),
      'slovakia' => $this->t('Slovakia'),
      'slovenia-square' => $this->t('Slovenia square'),
      'slovenia' => $this->t('Slovenia'),
      'spain-square' => $this->t('Spain square'),
      'spain' => $this->t('Spain'),
      'sweden-square' => $this->t('Sweden square'),
      'sweden' => $this->t('Sweden'),
    ]);
  }

}
