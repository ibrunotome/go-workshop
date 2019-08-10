// Go Api server
// @jeffotoni

package util

import (
	"regexp"
	"strings"
)

// substr (text, 2, 30)
func Substr(value string, leni, lenf int) string {

	if len(value) < leni {
		return ""
	}

	lenx := len(value) // max of text
	leny := lenf       // amount of character

	if lenx < lenf { // amount of character
		leny = lenx
	}

	// return..
	return value[leni:leny]
}

// convert the first character of each word to upper case
func Ucwords(str string) string {

	// Function replacing words (assuming lower case input)
	replace := func(word string) string {
		return strings.Title(word)
	}

	r := regexp.MustCompile(`\w+`)
	str = r.ReplaceAllStringFunc(strings.ToLower(str), replace)

	return str
}
