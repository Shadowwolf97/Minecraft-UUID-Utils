# Minecraft UUID Utils

Minecraft UUID Utils is a set of ready to use PHP classes to fetch Minecraft usernames or uuids from either a uuid or username. 

These classes allow you to find a user's UUID from their Username or Username from UUID.

## Documentation


### MinecraftProfile-\>getUsername()
```
Returns the username of the Minecraft Profile
```

### MinecraftProfile-\>getUUID()
```
Returns the UUID of the Minecraft Profile
```

### MinecraftProfile-\>getProperties()
```
Returns base64 encoded string.
This string contains information such as Skin, ProfileName, TimeStamp.
String must be decoded first to retrieve information.
```

### MinecraftProfile-\>getProfileAsArray()
<table>
    <tr>
        <th>Properties</th>
        <th>Descriptions</th>
    </tr>
    <tr>
        <td>"username"</td>
        <td>Returns the users username </td>
    </tr>
    <tr>
        <td>"uuid"</td>
        <td>Returns the users UUID </td>
    </tr>
    <tr>
        <td>"properties"</td>
        <td>Returns base64 encoded info for players. Information must be decoded to get extra data such as Skin, ProfileName, TimeStamp</td>
    </tr>
</table>

## Usage

Make sure to include the Minecraft UUID library.
```php
include("MinecraftUUID.php");
```

### Username to UUID

Example:
```php
$profile = ProfileUtils::getProfile("Shadowwolf97");

if ($profile != null) {
  $result = $profile->getProfileAsArray();
  echo 'username: '.$result['username'].'<br>';
  echo 'uuid: '.$result['uuid'].'<br/>';
}
```

### UUID to Username

Example:
```php
$profile = ProfileUtils::getProfile("c465b1543c294dbfa7e3e0869504b8d8");

if ($profile != null) {
  $result = $profile->getProfileAsArray();
  echo 'username: '.$result['username'].'<br>';
  echo 'uuid: '.$result['uuid'].'<br/>';
}
```

### FindProfile.php

Usage, Username to UUID, and UUID to Username (above) goes live with this file.

It accepts GET Request with either username or uuid.

Append "?username=YOUR_USER_NAME" to retrieve associated UUID OR
Append "?uuid=YOUR_UUID" to retrieve associated Username

This will print out Username and UUID on the screen.

## Background Assets:
There are also functions that may be called that might be useful.

### ProfileUtils::getUUIDFromUsername
Takes in a string username.

This function will convert the username and will return an array.
This array is in the format of (Key => Value) "username" => Minecraft username 
(properly capitalized) "uuid" => Minecraft UUID.

### ProfileUtils::getUUIDsFromUsernames
Takes in an array of usernames in string formatting.

This function will convert up to 100 usernames and will return an array containing arrays.
This internal array is in the format of (Key => Value) "username" => Minecraft username 
(properly capitalized) "uuid" => Minecraft UUID.

### ProfileUtils::formatUUID
Takes in an unformatted UUID string and returns a formatted uuid string.