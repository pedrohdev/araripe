# araripe
### Araripe is a framework for command line applications in PHP
**Requirements:**
- PHP >= 5.3.0

**Installation:**
1. Clone this repository


2. Add at the beginning of the PHP file

```
require_once './src/Core.php';

use Araripe as Araripe;
    
```

**Inputs**
```
Araripe\Core::input("How are you?\n"); //Prints 'How are you'

Araripe\Core::input("\nComo vai você?\n"); //Prints 'Como vai voce?'

```