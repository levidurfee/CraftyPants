# CraftyPants for Craft

I am developing this plugin to help myself learn Craft and how to develop plugins for Craft.

## Installation

To install CraftyPants

1. Upload craftypants folder to your craft/plugins/ folder
2. Login to Craft
3. Settings > Plugins from your Craft control panel and enable the CraftyPants plugin

## Usage

```php
<form method="POST" action="" accept-charset="UTF-8">
    <input type="hidden" name="action" value="craftyPants/names/addNewName">
    <input type="hidden" name="redirect" value="/">
    <input type="text" name="name">
    <input type="submit" class="btn submit" value="{{ 'Submit'|t }}">
</form>
<ul>
    {% for levels in craft.CraftyPants.getAll() %}
    <li>{{ levels.name }} [{{ levels.level }}]</li>
    {% endfor %}
</ul>
```

## Changelog

### 0.2.0

- form submission is working
- writing / reading to the database
- reading a config file

### 0.1.0

- Initial Release
- Skeleton / Foundation built
