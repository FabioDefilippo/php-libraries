# php-libraries
These php files contain functions to manage sessions, tokens and much more

You can clone this repository or include these php files adding <strong>allow_url_fopen</strong> and <strong>allow_url_include</strong> in php.ini file and setting them to 'On'.

example, adding inside php.ini file:
```
allow_url_fopen = On
allow_url_include = On
```
so, You can use <strong>incude</strong> to add these php files in your project.

## Documentation
### Token
#### generate_hex:
	 algos are
<ul>
    <li>md2</li>
    <li>md4</li>
    <li>md5</li>
    <li>sha1</li>
    <li>sha224</li>
    <li>sha256</li>
    <li>sha384</li>
    <li>sha512/224</li>
    <li>sha512/256</li>
    <li>sha512</li>
    <li>sha3-224</li>
    <li>sha3-256</li>
    <li>sha3-384</li>
    <li>sha3-512</li>
    <li>ripemd128</li>
    <li>ripemd160</li>
    <li>ripemd256</li>
    <li>ripemd320</li>
    <li>whirlpool</li>
    <li>tiger128,3</li>
    <li>tiger160,3</li>
    <li>tiger192,3</li>
    <li>tiger128,4</li>
    <li>tiger160,4</li>
    <li>tiger192,4</li>
    <li>snefru</li>
    <li>snefru256</li>
    <li>gost</li>
    <li>gost-crypto</li>
    <li>haval128,3</li>
    <li>haval160,3</li>
    <li>haval192,3</li>
    <li>haval224,3</li>
    <li>haval256,3</li>
    <li>haval128,4</li>
    <li>haval160,4</li>
    <li>haval192,4</li>
    <li>haval224,4</li>
    <li>haval256,4</li>
    <li>haval128,5</li>
    <li>haval160,5</li>
    <li>haval192,5</li>
    <li>haval224,5</li>
    <li>haval256,5</li>
</ul>
<hr />

### Password
#### encrypt_password:
	constants are
<ul>
<li>PASSWORD_DEFAULT</li>
<li>PASSWORD_BCRYPT</li>
<li>PASSWORD_ARGON2I</li>
<li>PASSWORD_ARGON2ID</li>
</ul>
