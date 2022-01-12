@api
Feature: Create a landing page
  In order to create landing pages with rich layouts
  As a content editor
  I need to be able to use the available paragraph types in my landing pages

  Scenario: All supported paragraph types are available
    Then the following paragraph types are available for "demo landing page" content:
      | Accordion                     |
      | Chart                         |
      | Content row                   |
      | Iframe                        |
      | Links block                   |
      | Listing item                  |
      | Listing item block            |
      | Quote                         |
      | Rich text                     |
      | Banner                        |
      | Contextual navigation         |
      | Social media follow           |
      | Text with Featured media      |
      | Horizontal description list   |
      | Facts and figures             |
      | Timeline                      |
      | Map                           |
      | Social feed                   |
      | Document                      |
      | Contact                       |
      | Illustration list with flags  |
      | Illustration list with icons  |
      | Illustration list with images |
