<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'email_header' => "<html><head><style>.body{background:#f5f5f5;padding:8px;text-align:center;font-size:16px;}.main{background:white;width:calc(100% - 32px);max-width:600px;margin:8px auto;padding:12px 8px}.title{color:#002de3}.btn{display:block;width:fit-content;margin:10px auto 20px;padding:8px 16px;border-radius:30px;background:#002de3;color:white !important;text-decoration:none}.err{background:#b00020}.code{font-size:24px;font-weight:bold;background:#f5f5f5;padding:4px 12px;width:fit-content;letter-spacing:3px;border:1px dashed #e5e5e5}.message{text-align:start;background:#f5f5f5;margin:8px;padding:8px;border-left:3px solid #002de3}pre{margin:0;line-height:normal;font-family:inherit}</style></head><body class='body'><h1 class='title'>^site_title</h1><div class='main'>",
	'email_footer' => "<br><p>Thank you,<br>^site_title<br>^site_url</p></div></body></html>",

	'a_commented_body' => "<p>Your answer on ^site_title has a new comment by <strong>^c_handle</strong>:</p><div class='message'><pre>^c_content</pre></div><p>Your answer was:</p><div class='message'><pre>^c_context</pre></div><p>You may respond by adding your own comment:</p><p><a class='btn' href='^url'>Reply</a></p>",
	'a_commented_subject' => 'Your ^site_title answer has a new comment',

	'a_followed_body' => "<p>Your answer on ^site_title has a new related question by <strong>^q_handle</strong>:</p><p><strong>^q_title</strong></p><p>Your answer was:</p><div class='message'><pre>^a_content</pre></div><p>Click below to answer the new question:</p><p><a class='btn' href='^url'>Answer new question</a></p>",
	'a_followed_subject' => 'Your ^site_title answer has a related question',

	'a_selected_body' => "<p>Congratulations! Your answer on ^site_title has been selected as the best by <strong>^s_handle</strong>:</p><p><strong>^q_title</strong></p><div class='message'><pre>^a_content</pre></div><p><a class='btn' href='^url'>See your answer</a></p>",
	'a_selected_subject' => 'Your ^site_title answer has been selected!',

	'c_commented_body' => "<p>A new comment by <strong>^c_handle</strong> has been added after your comment on ^site_title:</p><div class='message'><pre>^c_content</pre></div><p>The discussion is following:</p><div class='message'><pre>^c_context</pre></div><p>You may respond by adding another comment:</p><p><a class='btn' href='^url'>Reply</a></p>",
	'c_commented_subject' => 'Your ^site_title comment has been added to',

	'confirm_body' => "<p>Please click below to confirm your email address for ^site_title:</p><p><a class='btn' href='^url'>Confirm email address</a></p><p>Confirmation code:</p><p><span class='code'>^code</span></p>",
	'confirm_subject' => '^site_title - Email Address Confirmation',

	'feedback_body' => "<p><strong>Comments:</strong></p><div class='message'><pre>^message</pre></div><p><strong>Name:</strong> ^name</p><p><strong>Email:</strong> ^email</p><p><strong>Previous page:</strong> ^previous</p><p><strong>User:</strong> ^url</p><p><strong>IP address:</strong> ^ip</p><p><strong>Browser:</strong> ^browser</p>",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "<p>A post by <strong>^p_handle</strong> has received ^flags:</p><div class='message'><pre>^p_context</pre></div><p>Click below to see the post:</p><p><a class='btn' href='^url'>See post</a></p><p>Click below to review all flagged posts:</p><p><a class='btn' href='^a_url'>See all flagged posts</a></p>",
	'flagged_subject' => '^site_title has a flagged post',

	'moderate_body' => "<p>A post by <strong>^p_handle</strong> requires your approval:</p><div class='message'><pre>^p_context</pre></div><p>Click below to approve or reject the post:</p><p><a class='btn' href='^url'>See post</a></p><p>Click below to review all queued posts:</p><p><a class='btn' href='^a_url'>See all queued posts</a></p>",
	'moderate_subject' => '^site_title moderation',

	'new_password_body' => "<p>Your new password for ^site_title is below.</p><p><strong>Password:</strong> ^password</p><p>It is recommended to change this password immediately after logging in.</p>",
	'new_password_subject' => '^site_title - Your New Password',

	'private_message_body' => "<p><strong>^f_handle</strong> sent you a message on ^site_title</p><div class='message'><pre>^message</pre></div><p>^more</p><p>To block private messages, visit your account page:</p><p><a class='btn err' href='^a_url'>Block private messages</a></p>",
	'private_message_info' => "<a class='btn' href='^url'>View ^f_handle's profile</a>",
	'private_message_reply' => "<a class='btn' href='^url'>Reply to ^f_handle</a>",
	'private_message_subject' => 'Message from ^f_handle on ^site_title',

	'q_answered_body' => "<p>Your question on ^site_title has been answered by <strong>^a_handle</strong>:</p><p><strong>^q_title</strong></p><div class='message'><pre>^a_content</pre></div><p>If you like this answer, you may select it as the best:</p><p><a class='btn' href='^url'>Select as best</a></p>",
	'q_answered_subject' => 'Your ^site_title question was answered',

	'q_commented_body' => "<p>Your question on ^site_title has a new comment by <strong>^c_handle</strong>:</p><p><strong>^c_context</strong></p><div class='message'><pre>^c_content</pre></div><p>You may respond by adding your own comment:</p><p><a class='btn' href='^url'>Reply</a></p>",
	'q_commented_subject' => 'Your ^site_title question has a new comment',

	'q_posted_body' => "<p>A new question has been asked by <strong>^q_handle</strong>:</p><p><strong>^q_title</strong></p><div class='message'><pre>^q_content</pre></div><p>Click below to see the question:</p><p><a class='btn' href='^url'>See question</a></p>",
	'q_posted_subject' => '^site_title has a new question',

	'remoderate_body' => "<p>An edited post by <strong>^p_handle</strong> requires your reapproval:</p><div class='message'><pre>^p_context</pre></div><p>Click below to approve or hide the edited post:</p><p><a class='btn' href='^url'>See post</a></p><p>Click below to review all queued posts:</p><p><a class='btn' href='^a_url'>See all queued posts</a></p>",
	'remoderate_subject' => '^site_title moderation',

	'reset_body' => "<p>Please click below to reset your password for ^site_title:</p><p><a class='btn' href='^url'>Reset your password</a></p><p>Code for reseting your password:</p><p><span class='code'>^code</span></p><p>If you did not ask to reset your password, please ignore this message.</p>",
	'reset_subject' => '^site_title - Reset Forgotten Password',

	'to_handle_prefix' => "<p>Hello ^,</p>",

	'u_registered_body' => "<p>A new user has registered as <strong>^u_handle</strong>.</p><p>Click below to view the user profile:</p><p><a class='btn' href='^url'>View user</a></p>",
	'u_registered_subject' => '^site_title has a new registered user',
	'u_to_approve_body' => "<p>A new user has registered as <strong>^u_handle</strong>.</p><p>Click below to approve the user:</p><p><a class='btn' href='^url'>Approve user</a></p><p>Click below to review all users waiting for approval:</p><p><a class='btn' href='^a_url'>View all unapproved user</a></p>",

	'u_approved_body' => "<p>You can see your new user profile here:</p><p><a class='btn' href='^url'>View your profile</a></p>",
	'u_approved_subject' => 'Your ^site_title user has been approved',

	'wall_post_body' => "<p><strong>^f_handle</strong> has posted on your user wall at ^site_title:</p><div class='message'><pre>^post</pre></div><p>You may respond to the post here:</p><p><a class='btn' href='^url'>Reply</a></p>",
	'wall_post_subject' => 'Post on your ^site_title wall',

	'welcome_body' => "<p>Thank you for registering for ^site_title.</p>^custom^confirm<br><p>Your login details are as follows:</p><p><strong>Username:</strong> ^handle<br><strong>Email:</strong> ^email</p><p>Please keep this information safe for future reference.</p>",
	'welcome_confirm' => "<p>Please click below to confirm your email address.</p><p><a class='btn' href='^url'>Confirm email address</a></p>",
	'welcome_subject' => 'Welcome to ^site_title!',
);
