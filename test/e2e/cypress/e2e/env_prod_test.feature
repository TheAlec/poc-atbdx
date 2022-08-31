Feature: duckduckgo.com
  Scenario: visiting the frontpage
    When I visit production environment
    Then I should see "production"
