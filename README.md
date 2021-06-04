# RFCS 
query rfcs or retrieve a specific one in command-line friendly parsing.

## Usage
The program (in main.php) takes 1 argument: if it's a number like `404`, it will retrieve rfc404 from rfc-editor.org and print to stdout; If it's a string like `smtp` it will search for it using rfc-editor.org's search function and print one rfc per line with no., title, date, and status.

I've included a shell script that you can symbolic link to or something for quick access, e.g.

```
rfcs hest // outputs:
searching for hest
Number - Title - Date - Status
RFC 7067 - Directory Assistance Problem and High-Level Design Proposal - November 2013 - Informational
RFC 8199 - YANG Module Classification - July 2017 - Informational
RFC 8309 - Service Models Explained - January 2018 - Informational
RFC 8453 - Framework for Abstraction and Control of TE Networks (ACTN) - August 2018 - Informational
```

