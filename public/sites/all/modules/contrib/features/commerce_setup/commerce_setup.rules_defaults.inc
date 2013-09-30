<?php
/**
 * @file
 * commerce_setup.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function commerce_setup_default_rules_configuration() {
  $items = array();
  $items['rules_completed_initial_information'] = entity_import('rules_config', '{ "rules_completed_initial_information" : {
      "LABEL" : "Completed Initial Information",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "rules", "rules_linkevent" ],
      "ON" : [ "rules_linkevent_submit_information" ],
      "IF" : [
        { "user_has_role" : {
            "account" : [ "site:current-user" ],
            "roles" : { "value" : { "6" : "6" } }
          }
        }
      ],
      "DO" : [
        { "user_add_role" : {
            "account" : [ "site:current-user" ],
            "roles" : { "value" : { "5" : "5" } }
          }
        },
        { "user_remove_role" : {
            "account" : [ "site:current-user" ],
            "roles" : { "value" : { "6" : "6" } }
          }
        },
        { "drupal_message" : { "message" : "Thankyou for submitting the information.  A member of our administration team will be in touch soon to confirm payment." } },
        { "redirect" : { "url" : "your-page" } },
        { "mail" : {
            "to" : "[site:current-user]",
            "subject" : "Thankyou for subscribing to this course",
            "message" : "Thankyou for subscribing to this course",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        },
        { "mail" : {
            "to" : "[site:mail]",
            "subject" : "New user has subscribed",
            "message" : "New user has subscribed: [site:current-user]",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        },
        { "entity_query" : {
            "USING" : {
              "type" : "registration",
              "property" : "user_uid",
              "value" : [ "site:current-user:uid" ]
            },
            "PROVIDE" : { "entity_fetched" : { "entity_fetched" : "Fetched entity" } }
          }
        },
        { "LOOP" : {
            "USING" : { "list" : [ "entity-fetched" ] },
            "ITEM" : { "list_item" : "Current list item" },
            "DO" : [
              { "data_set" : { "data" : [ "list-item:state" ], "value" : "pending" } }
            ]
          }
        },
        { "drupal_message" : { "message" : "RULES: Completed Initial Information" } }
      ]
    }
  }');
  $items['rules_initial_registration'] = entity_import('rules_config', '{ "rules_initial_registration" : {
      "LABEL" : "Initial Registration",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "rules", "registration" ],
      "ON" : [ "registration_insert" ],
      "DO" : [
        { "mail" : {
            "to" : "[site:mail]",
            "subject" : "New registrant",
            "message" : "A new user has registered for our course, please review their request and respond",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        },
        { "mail" : {
            "to" : "[site:current-user]",
            "subject" : "Thankyou",
            "message" : "Thankyou for registering, please now login and \\u003Ca href=\\u0022[site:url]\\/your-page\\u0022\\u003Ecomplete the further information fields\\u003C\\/a\\u003E on our site to complete your registration.",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        },
        { "drupal_message" : { "message" : "RULES: Initial Registration" } }
      ]
    }
  }');
  $items['rules_registration_approved_by_admin'] = entity_import('rules_config', '{ "rules_registration_approved_by_admin" : {
      "LABEL" : "Registration approved by admin",
      "PLUGIN" : "reaction rule",
      "REQUIRES" : [ "rules", "registration" ],
      "ON" : [ "registration_update" ],
      "IF" : [
        { "data_is" : { "data" : [ "registration-unchanged:state" ], "value" : "interested" } },
        { "data_is" : { "data" : [ "registration:state" ], "value" : "awaiting_details" } },
        { "data_is" : { "data" : [ "registration:user-uid" ], "op" : "\\u003E", "value" : "0" } }
      ],
      "DO" : [
        { "drupal_message" : { "message" : "RULES: Registration approved by admin" } },
        { "mail" : {
            "to" : "[registration:mail]",
            "subject" : "request approved",
            "message" : "Your request has been approved, please login with your new account and supply us the final info we need",
            "from" : "[site:mail]",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
