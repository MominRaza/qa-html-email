# Q2A HTML Emails

Warning: You need to modify one q2a core file.

## Steps to enable

1. put qa-lang-emails.php file in your language folder, if you are using default language than put it in en-GB and change language to en-GB.
1. change line [56](https://github.com/q2a/question2answer/blob/947a970beb76168a3ab1f4cbd0af468a168121c6/qa-include/app/emails.php#L56) in qa-include/app/emails.php

   ```php
   function qa_send_notification($userid, $email, $handle, $subject, $body, $subs, $html = true)
   ```

1. change line [115](https://github.com/q2a/question2answer/blob/947a970beb76168a3ab1f4cbd0af468a168121c6/qa-include/app/emails.php#L115) in qa-include/app/emails.php

   ```php
   'body' => strtr(qa_lang('emails/email_header'), $subs) . (empty($handle) ? '' : qa_lang_sub('emails/to_handle_prefix', $handle)) . strtr($body, $subs) . strtr(qa_lang('emails/email_footer'), $subs),
   ```

1. thats it.

## Screenshots

<p float="left">
    <img src="https://www.question2answer.org/qa/?qa=blob&qa_blobid=17352717302812111123" width="300"/>
    <img src="https://www.question2answer.org/qa/?qa=blob&qa_blobid=5858666568097839207" width="300"/>
    <img src="https://www.question2answer.org/qa/?qa=blob&qa_blobid=8349372481078358750" width="300"/>
    <img src="https://www.question2answer.org/qa/?qa=blob&qa_blobid=17033560463985820869" width="300"/>
</p>
