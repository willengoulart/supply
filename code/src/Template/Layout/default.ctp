<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">

    <title>Supply - Clean your Business</title>

    <?=
        // Include Bootstrap CSS
        $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', [
            'integrity' => 'sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M',
            'crossorigin' => 'anonymous'
        ]).

        // Include Major Local CSS
        $this->Html->css([
            // Vendor CSS
            '/vendor/font-awesome/css/font-awesome.min.css',
            
            // App CSS
            'master.css'
        ]).

        // Include Page Specific CSS
        $this->fetch('css')
    ?>
  </head>
  <body>
    <div class="page-wrapper">
        <div id="templates-wrapper">
            <?= $this->fetch('app_templates') ?>
        </div>

        <?=
            $this->element('header').
            $this->fetch('content').
            $this->element('footer')
        ?>
    </div>

    <?=
        // Include jQuery
        $this->Html->script('https://code.jquery.com/jquery-3.2.1.slim.min.js', [
            'integrity' => 'sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN',
            'crossorigin' => 'anonymous'
        ]).

        // Include Booststrap JS Libs
        $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', [
            'integrity' => 'sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4',
            'crossorigin' => 'anonymous'
        ]).
        $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', [
            'integrity' => 'sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1',
            'crossorigin' => 'anonymous'
        ]).

        // Include Major Local JS
        $this->Html->script([
            'mock-data.js',
            'app.js'
        ]).

        // Include Page Specific JS
        $this->fetch('script')
    ?>
  </body>
</html>
