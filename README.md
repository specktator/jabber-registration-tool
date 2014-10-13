<h1>Jabber Registration Tool</h1>

**The Jabber Registration Tool** (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL).
Jabber Registration Tool's (JRT) original author is **Rene S. C. Bartosh (kirjava@jabber.org)**.

Since this project is not maintained anymore by its original author, I decided to continue with it and provide some minor changes.

Original Source Code can be found [here](http://kirjava.net.nz/temp/?p=Scripts)

<h1>The problem to be solved:</h1>
Xmpp servers are commonly used along with DNS SRV records in order clients to discover services, hostnames etc. The problem I was facing was that if an xmpp server serves, multiple virtual hosts, with vhost names in form of **example.org** (*in order to provide jids like user@example.org*) and a hostname different than example.org (in ex. **xmpp.example.org**) some xmpp/jabber clients can **not** use their [in-band registration (XEP-0077)](http://xmpp.org/extensions/xep-0077.html) feature because they're trying to resolve **IN A example.org** instead of **IN SRV _xmpp-client._tcp.example.org** to get the real address of the server. 

(Of course this is a misimplementation of the protocol, but most admins need a fast and user-friendly workaround until the bugs are fixed)

<h1>What's changed:</h1>

I've added to [register.php](/register.php/) [dns_get_record()](http://php.net/manual/en/function.dns-get-record.php) command to resolve user's xmpp server and set the actual hostname of the server to [var $hostname](/class.jabber.php/), which is also added by me, in order [OpenSocket](/class.jabber.php/) method to correctly connect to the appropriate hostname.

<h2>Contact details:</h2>
* jid & email: specktator //\\at\\// totallynoob.com
* Website: [totallynoob.com](http://totallynoob.com)
