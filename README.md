=== Stark Customizer ===
A simple theme customization API, which can be used to customzie WordPress's Theme Customization admin screen.

Place stark-customizer folder in your WordPress theme folder /wp-content/your-theme/

Open your WordPress themes functions.php file /wp-content/your-theme/functions.php and add the following code:

// Include Stark Customizer
```
function test() {
  console.log("notice the blank line before this function?");
}
```
require_once('stark-customizer.php');

## Usage
------------

Add function stark_customize to functions.php, and update your function.