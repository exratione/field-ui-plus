--- Summary ---

Field UI Plus adds a modest amount of data to the administration configuration
page provided by the Field UI module. This helps to see the important field
instance configuration settings at a glance, without having to walk through
numerous subpages.

The Field UI module provides an administrative user interface to the Field
module functionality that works well for the basics, but any earnest use of
fields will quickly run into its limitations. Suppose, for example, that you
are working on a project wherein the node entity portion of the data model is
described by a few dozen content types, a hundred or so different field
definitions, and more than two hundred field instances spread across those
content types. This is not unreasonable once you start thinking about the sort
of Drupal site that supports the Economist, for example, or other similar
business initiatives. Your data model will invariably evolve as the project
progresses, and a great deal of the administrative work flow is defined, or at
least channeled, by the settings in those few hundred field instances: which
widget to use, the messages displayed to the user, which fields are required,
how many values are permitted, and so on. The list of configurations becomes
very long for the more complex field types provided by contributed modules,
such as video uploads or file library selectors.

So you will find yourself pulling up content type field lists in the
adminstrative user interface and cursing the fact that you can't see at a
glance what the common field settings are. Is instance A of field X in
content type R set to required, or was that instance B in content type S?
Which content types are permitted for node reference field Y? Are all of
the configuration values for the fifteen instances of field Z actually up
to date for the recently proposed administrative UI changes? Finding the
answers is at the least another few page loads, and when you multiply that by
the number of times you need to ask these questions in the course of
development, it turns into both a real annoyance and time sink.

Hence this module.

--- Hooks ---

To add more information to the field instance configuration settings displayed
by Field UI Plus, a developer can implement the following hook:

hook_field_ui_plus_instance_data($instance)
