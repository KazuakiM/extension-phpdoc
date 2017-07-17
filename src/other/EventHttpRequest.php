 EventHttpRequest {
/* Constants */
const integer CMD_GET = 1 ;
const integer CMD_POST = 2 ;
const integer CMD_HEAD = 4 ;
const integer CMD_PUT = 8 ;
const integer CMD_DELETE = 16 ;
const integer CMD_OPTIONS = 32 ;
const integer CMD_TRACE = 64 ;
const integer CMD_CONNECT = 128 ;
const integer CMD_PATCH = 256 ;
const integer INPUT_HEADER = 1 ;
const integer OUTPUT_HEADER = 2 ;
/* Methods */
public bool addHeader ( string $key , string $value , int $type )
public void cancel ( void )
public void clearHeaders ( void )
public void closeConnection ( void )
public __construct ( callable $callback [, mixed $data = NULL ] )
public void findHeader ( string $key , string $type )
public void free ( void )
public EventBufferEvent closeConnection ( void )
public void getCommand ( void )
public EventHttpConnection closeConnection ( void )
public string getHost ( void )
public EventBuffer getInputBuffer ( void )
public array getInputHeaders ( void )
public EventBuffer getOutputBuffer ( void )
public void getOutputHeaders ( void )
public int getResponseCode ( void )
public string getUri ( void )
public void removeHeader ( string $key , string $type )
public void sendError ( int $error [, string $reason = NULL ] )
public void sendReply ( int $code , string $reason [, EventBuffer $buf ] )
public void sendReplyChunk ( EventBuffer $buf )
public void sendReplyEnd ( void )
public void sendReplyStart ( int $code , string $reason )
}
