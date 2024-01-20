# Phone Validate

Some simple regex phone validation functions for use with UK and US phone numbers.

I created these functions to validate user input of phone numbers; they do a simple validation check on UK and US phone numbers.

These are not definitive, so they should only be used to check if an entry looks valid; they do not guarantee that the number is actually correct!

## Usage

Add the functions to your code and call them by passing the phone number to check, the functions will return a boolen so true if vaild phone number and false if not.

```
if (UKPhoneCheck($number)) {
    # a valid number so do something
} else {
    # not a valid number do something else!
}
```

## Credits

Thanks to Brad from Traversy Media for teaching the importance of documenting my code.

https://traversymedia.com

## License

The MIT License

Copyright (c) 2024 HarrisonLILY https://harrisonlily.co.uk

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
