<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Active Tickets',
  'nav-completed-tickets'            => 'Completed Tickets',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Subject',
  'table-owner'                      => 'Owner',
  'table-status'                     => 'Status',
  'table-last-updated'               => 'Last Updated',
  'table-priority'                   => 'Priority',
  'table-agent'                      => 'Agent',
  'table-category'                   => 'Category',

   // Bootgrid
  'bootgrid-infos'                   => 'Showing {{ctx.start}} to {{ctx.end}} of {{ctx.total}} entries', //Added: 2016. IV. 18
  'bootgrid-loading'                 => 'Loading...', //Added: 2016. IV. 18
  'bootgrid-noResults'               => 'No results found!', //Added: 2016. IV. 18
  'bootgrid-refresh'                 => 'Refresh', //Added: 2016. IV. 18
  'bootgrid-search'                  => 'Search', //Added: 2016. IV. 18

  'btn-back'                         => 'Back',
  'btn-cancel'                       => 'Cancel', // NEW
  'btn-close'                        => 'Close',
  'btn-delete'                       => 'Delete',
  'btn-edit'                         => 'Edit',
  'btn-mark-complete'                => 'Mark Complete',
  'btn-submit'                       => 'Submit',

  'agent'                            => 'Agent',
  'category'                         => 'Category',
  'colon'                            => ': ',
  'comments'                         => 'Comments',
  'created'                          => 'Created',
  'description'                      => 'Description',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Last Update',
  'no-replies'                       => 'No replies.',
  'owner'                            => 'Owner',
  'priority'                         => 'Priority',
  'private'                          => 'Private',
  'reopen-ticket'                    => 'Reopen Ticket',
  'reply'                            => 'Reply',
  'responsible'                      => 'Responsible',
  'status'                           => 'Status',
  'subject'                          => 'Subject',
  'time-spent'                       => 'Work Time',
  'file-upload'                      => 'Upload File',
 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Helpdesk main page',

// tickets/____
  'index-my-tickets'                 => 'My Tickets',
  'btn-create-new-ticket'            => 'Create new ticket',
  'index-complete-none'              => 'There are no complete tickets',
  'index-active-check'               => 'Be sure to check Active Tickets if you cannot find your ticket.',
  'index-active-none'                => 'There are no active tickets,',
  'index-create-new-ticket'          => 'create new ticket',
  'index-complete-check'             => 'Be sure to check Complete Tickets if you cannot find your ticket.',

  'create-ticket-title'              => 'New Ticket Form',
  'create-new-ticket'                => 'Create New Ticket',
  'create-ticket-brief-issue'        => 'A brief of your issue ticket',
  'create-ticket-describe-issue'     => 'Describe your issue here in details',

  'show-ticket-title'                => 'Ticket',
  'show-ticket-js-delete'            => 'Are you sure you want to delete: ',
  'show-ticket-modal-delete-title'   => 'Delete Ticket',
  'show-ticket-modal-delete-message' => 'Are you sure you want to delete ticket: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => 'Agents :names are added to agents',
  'administrators-are-added-to-administrators'      => 'Administrators :names are added to administrators', //New
  'agents-joined-categories-ok'                     => 'Joined categories successfully',
  'agents-is-removed-from-team'                     => 'Removed agent\s :name from the agent team',
  'administrators-is-removed-from-team'             => 'Removed administrator\s :name from the administrators team', // New

// CategoriesController
  'category-name-has-been-created'   => 'The category :name has been created!',
  'category-name-has-been-modified'  => 'The category :name has been modified!',
  'category-name-has-been-deleted'   => 'The category :name has been deleted!',

// PrioritiesController
  'priority-name-has-been-created'   => 'The priority :name has been created!',
  'priority-name-has-been-modified'  => 'The priority :name has been modified!',
  'priority-name-has-been-deleted'   => 'The priority :name has been deleted!',
  'priority-all-tickets-here'        => 'All priority related tickets here',

// StatusesController
  'status-name-has-been-created'   => 'The status :name has been created!',
  'status-name-has-been-modified'  => 'The status :name has been modified!',
  'status-name-has-been-deleted'   => 'The status :name has been deleted!',
  'status-all-tickets-here'        => 'All status related tickets here',

// CommentsController
  'comment-has-been-added-ok'        => 'Comment has been added successfully',

// NotificationsController
  'notify-new-comment-from'          => 'New comment from ',
  'notify-on'                        => ' on ticket ',
  'notify-status-to-complete'        => ' status to Complete',
  'notify-status-to'                 => ' status to ',
  'notify-transferred'               => ' transferred ticket ',
  'notify-to-you'                    => ' to you',
  'notify-created-ticket'            => ' created ticket ',
  'notify-updated'                   => ' updated ticket ',
  'notify-created-ticket-by-email'   => ' Your Ticket id ',

 // TicketsController
  'the-ticket-has-been-created'      => 'The ticket has been created!',
  'the-ticket-has-been-modified'     => 'The ticket has been modified!',
  'the-ticket-has-been-deleted'      => 'The ticket :name has been deleted!',
  'the-ticket-has-been-completed'    => 'The ticket :name has been completed!',
  'the-ticket-has-been-reopened'     => 'The ticket :name has been reopened!',
  'you-are-not-permitted-to-do-this' => 'You are not permitted to do this action!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'You are not permitted to access this page!',

];
