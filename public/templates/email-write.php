<div style="font-family: Gilroy, Montserrat, Roboto, Arial, Verdana, sans-serif;
            background: #fbf8f2;
            padding: 5% 0;
            margin: 0 auto;
            min-width: 100% !important;">

  <div style="margin: 0 auto;
              padding: 5%;
              background: #fff;
              max-width: 600px;
              width: 100%;">

    <table cellpadding="10px">
      <tr style="vertical-align: top">
        <td colspan="2"><?= $contact_message; ?></td>
      </tr>
      <tr style="vertical-align: top">
        <td><span style="font-weight: bold; color: #7f8990">Имя:</span></td>
        <td><?= $contact_name; ?></td>
      </tr>
      <tr style="vertical-align: top">
        <td><span style="font-weight: bold; color: #7f8990">Email:</span></td>
        <td><a href="mailto:<?= $contact_email; ?>"><?= $contact_email; ?></a></td>
      </tr>
      <tr style="vertical-align: top">
        <td><span style="font-weight: bold; color: #7f8990">Отправлено со страницы:</span></td>
        <td><?= $contact_subject; ?></td>
      </tr>
    </table>

    <hr style="border: 1px solid #70b991; width: 70%">

    <div style="text-align: center">
      <small><a style="color: #7f8990" href="http://leofel.ru" target="_blank">Леофел</a></small>
    </div>
  </div>
</div>