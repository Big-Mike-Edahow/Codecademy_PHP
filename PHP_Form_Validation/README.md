# PHP Form Validation

Regular expressions are special sequences of characters that describe a pattern of text that is to be matched.

We can use literals to match the exact characters that we desire.

Alternation, using the pipe symbol |, allows us to match the text preceding or following the |

Character sets, denoted by a pair of brackets [], let us match one character from a series of characters
Wildcards, represented by the period or dot ., will match any single character (letter, number, symbol or whitespace).

Ranges allow us to specify a range of characters in which we can make a match.

Shorthand character classes like \w, \d and \s represent the ranges representing word characters, digit characters, and whitespace characters, respectively.

Groupings, denoted with parentheses (), group parts of a regular expression together, and allows us to limit alternation to part of a regex.

Fixed quantifiers, represented with curly braces {}, let us indicate the exact quantity or a range of quantity of a character we wish to match.

Optional quantifiers, indicated by the question mark ?, allow us to indicate a character in a regex is optional, or can appear either 0 times or 1 time.

The Kleene star, denoted with the asterisk *, is a quantifier that matches the preceding character 0 or more times.

The Kleene plus, denoted by the plus +, matches the preceding character 1 or more times.

The anchor symbols hat ^ and dollar sign $ are used to match text at the start and end of a string, respectively.

Performing back-end form validations on the data submitted is an essential step to protect our website and its users.

Using the POST method attribute in an HTML form gives our PHP script access to data submitted within the superglobal associative array: $_POST.

We modify our HTML and PHP so that when input is deemed invalid, meaningful feedback is shown to the user.

If we plan on displaying user input, we need to first sanitize it. We can use methods like trim() and htmlspecialchars() for basic sanitization.

We can use filter_var() with a filter to sanitize common input types.

We can also use filter_var() with a filter to perform validations on common input types.

We’ll often want to perform custom validations.

The preg_match() function compares checks if a given string matches a regular expression.

Since regular expression comparisons can consume a lot of computing power, we’ll want to check the length of inputs before performing regular expression checks.

It’s common to perform validations by comparing user input to back-end data.

Before storing user input in our back-end, we’ll sanitize it for both safety and consistent formatting
If a user’s form submission has been accepted, we can reroute them to a different page.
