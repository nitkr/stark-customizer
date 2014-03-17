# Stark Customizer
A simple theme customization API, which can be used to customize WordPress's Theme Customization admin screen.

Place stark-customizer folder in your WordPress theme folder ```/wp-content/your-theme/```

Open your WordPress themes ```functions.php``` file ```/wp-content/your-theme/functions.php``` and add the following code:

// Include Stark Customizer
```
function test() {
  console.log("notice the blank line before this function?");
}
```
```require_once('stark-customizer.php');```

## Usage
## The second largest heading (an <h2> tag)

Add function ```stark_customize``` to ```functions.php```, and update your function.

### Example

```
function stark_customize() {

	$options['section']['tcx_display_options'] = array(
		'title'     => 'Display Options',
	   'priority'  => 200,
		'description' => __('This optional argument can add additional descriptive text to the section.','stark_customizer')
	);

	$options['setting']['tcx_display_header'] = array(
	        'default'    =>  'true',
	        'transport'  =>  'postMessage'
	);

	$options['control']['tcx_display_header'] = array(
		'section'   => 'tcx_display_options',
	        'label'     => 'Display Header?',
	        'type'      => 'checkbox'
	);

}

```
