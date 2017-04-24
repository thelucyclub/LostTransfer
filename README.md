# LostTransfer
An extension of the vanilla MCPE TransferPacket!

## Features (TODO):
- [x] Open Transfer
- [x] Create SpecialPacket
  - [x] Bind with RakLib  
- [x] Fast transfering
- [ ] Command Implentation
- [ ] Automatic Transferring (if player kicked, etc.)
- [ ] ~~Transfer player to lobby on DisconnectEvent~~ Not Possible*
- [ ] Create mesh networks (/hub, /factions, etc.)
- [ ] Add CustomAudioPacket



*..yet?

Commit [`e9792bc`](https://github.com/thelucyclub/LostTransfer/commit/e9792bc190200acbc028934a82246ee74a2dd1f8) was a breakthrough for this plugin. Currently, this is only supported via events, but soon I wish to incorporate it into the plugin itself. For developers who want to use this, implent it like this:
```
<?php
use pocketmine\...
...

use LostTransfer\InstaTransfer as IT;

...code...
/*
Then,
*/
$lostTransferEvent->transferInstant($player, lr.game-server.cc, 19132);
?>
```
If you are using Tesseract, then for some reason you may need to do
```
<?php
use pocketmine\...
...

use LostTransfer\InstaTransfer;

...code...
/*
Then,
*/
public $ip = "play.lostrealms-beta.tk";
public $port = "19132";
$losTransferEvent->callSub($port ?? 19132, $ip)->transferPlayer($ip, $port);
```
###### NOTE: Has not been extensively tested on forks (and spoons) of pocketmine. Some features, may not work properly, or not work at all.
If anyone still uses Beef-SCI PM do this:
```
{BEEF{
#call functionLoad(pockemine::Player,pocketmine::Server,raklib::mcpe;Vanilla)*
++Then add a seperate line==
#call functionLoad(getPluginLoad(LostTransfer::InstaTransfer as IT))*
++ Since transfer event is already implemented through Beef, just do this.==
@plugin onPlayerTransferEvent[
$lostTransfer->declareChange($ip, $port %19132%)->transferPlayer($player, $ip, $port%19132%)*
]
&private functionStopTick(**tick--892);
!sign == <ExamplePluginTransfer>
}SCI}
