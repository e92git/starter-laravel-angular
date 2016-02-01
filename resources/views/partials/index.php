<p ng-if="authenticatedUser">
    Hello {{authenticatedUser.username}}, thank you for watching me.
</p>
<p ng-if="!authenticatedUser">
    Hello guest, thank you for watching me.
</p>
