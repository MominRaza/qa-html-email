# Q2A HTML Emails

## Steps to enable

1. put qa-lang-emails.php file in language folder
1. line [56](https://github.com/q2a/question2answer/blob/947a970beb76168a3ab1f4cbd0af468a168121c6/qa-include/app/emails.php#L56) in qa-include/app/emails.php

   ```php
   function qa_send_notification($userid, $email, $handle, $subject, $body, $subs, $html = true)
   ```

1. line [115](https://github.com/q2a/question2answer/blob/947a970beb76168a3ab1f4cbd0af468a168121c6/qa-include/app/emails.php#L115) in qa-include/app/emails.php

   ```php
   'body' => strtr(qa_lang('emails/email_header'), $subs) . (empty($handle) ? '' : qa_lang_sub('emails/to_handle_prefix', $handle)) . strtr($body, $subs) . strtr(qa_lang('emails/email_footer'), $subs),
   ```

1. thats it.
