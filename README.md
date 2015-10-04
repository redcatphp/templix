 Templix
========

 Templix is a powerfull markup syntax based template engine.  
Features
--------

- [recursive extend](http://wildsurikat.com/Documentation/Templix#plugin-extend)
- [CSS3 Selectors](http://www.w3.org/TR/css3-selectors/) ([jQuery](https://jquery.com)/[sizzle](http://sizzlejs.com) like) to work on DOM at compilation time
- PHP compliant
- [onCompile binder](http://wildsurikat.com/Documentation/Templix#on-compile)
- PHP short-open-tag syntax support even if not enable in php.ini
- PHP syntax elements ported to HTML5
- [HTML5/XML syntax](http://wildsurikat.com/Documentation/Templix#html5-plugins)
- [extended Templix syntax](http://wildsurikat.com/Documentation/Templix#templix-syntax)
- As fast as simple include when compiled
- [Possibility to build your own markup based logic language](http://wildsurikat.com/Documentation/Templix#diy-plugins)
- [Markup Object Methods](http://wildsurikat.com/Documentation/Templix#markup-methods)- [closest](http://wildsurikat.com/Documentation/Templix#method-closest)
- [searchNode](http://wildsurikat.com/Documentation/Templix#method-searchnode)
- [match](http://wildsurikat.com/Documentation/Templix#method-match)
- [find](http://wildsurikat.com/Documentation/Templix#method-find)
- [children](http://wildsurikat.com/Documentation/Templix#method-children)
- [merge](http://wildsurikat.com/Documentation/Templix#method-merge)
- [premerge](http://wildsurikat.com/Documentation/Templix#method-premerge)
- [submerge](http://wildsurikat.com/Documentation/Templix#method-submerge)
- [isSameNode](http://wildsurikat.com/Documentation/Templix#method-issamenode)
- [getAttributes](http://wildsurikat.com/Documentation/Templix#method-getattributes)
- [hasAttribute](http://wildsurikat.com/Documentation/Templix#method-hasattribute)
- [getElementsByTagName](http://wildsurikat.com/Documentation/Templix#method-getelementsbytagname)
- [write](http://wildsurikat.com/Documentation/Templix#method-write)
- [append](http://wildsurikat.com/Documentation/Templix#method-append)
- [prepend](http://wildsurikat.com/Documentation/Templix#method-prepend)
- [each](http://wildsurikat.com/Documentation/Templix#method-each)
- [replaceWith](http://wildsurikat.com/Documentation/Templix#method-replacewith)
- [remove](http://wildsurikat.com/Documentation/Templix#method-remove)
- [applyFile](http://wildsurikat.com/Documentation/Templix#method-applyfile)
- [before](http://wildsurikat.com/Documentation/Templix#method-before)
- [after](http://wildsurikat.com/Documentation/Templix#method-after)
- [getIndex](http://wildsurikat.com/Documentation/Templix#method-getindex)
- [getInnerMarkups](http://wildsurikat.com/Documentation/Templix#method-getinnermarkups)
- [getInner](http://wildsurikat.com/Documentation/Templix#method-getinner)
- [\_\_toString](http://wildsurikat.com/Documentation/Templix#method-tostring)
- [clear](http://wildsurikat.com/Documentation/Templix#method-clear)
- [clearInner](http://wildsurikat.com/Documentation/Templix#method-clearinner)
- [head](http://wildsurikat.com/Documentation/Templix#method-head)
- [foot](http://wildsurikat.com/Documentation/Templix#method-foot)
- [innerHead](http://wildsurikat.com/Documentation/Templix#method-innerhead)
- [innerFoot](http://wildsurikat.com/Documentation/Templix#method-innerfoot)
- [attr](http://wildsurikat.com/Documentation/Templix#method-attr)
- [tmpAttr](http://wildsurikat.com/Documentation/Templix#method-tmpattr)
- [removeAttr](http://wildsurikat.com/Documentation/Templix#method-removeattr)
- [remapAttr](http://wildsurikat.com/Documentation/Templix#method-remapattr)
- [data](http://wildsurikat.com/Documentation/Templix#method-data)
- [css](http://wildsurikat.com/Documentation/Templix#method-css)
- [removeClass](http://wildsurikat.com/Documentation/Templix#method-removeclass)
- [addClass](http://wildsurikat.com/Documentation/Templix#method-addclass)
- [wrap](http://wildsurikat.com/Documentation/Templix#method-wrap)
- [unwrap](http://wildsurikat.com/Documentation/Templix#method-unwrap)
- [createChild](http://wildsurikat.com/Documentation/Templix#method-createchild)
- [recursive](http://wildsurikat.com/Documentation/Templix#method-recursive)
- [arecursive](http://wildsurikat.com/Documentation/Templix#method-arecursive)
- [getIterator magic](http://wildsurikat.com/Documentation/Templix#method-getiterator)
- [offsetGet magic](http://wildsurikat.com/Documentation/Templix#method-offsetget)
- [offsetSet magic](http://wildsurikat.com/Documentation/Templix#method-offsetset)
- [offsetUnset magic](http://wildsurikat.com/Documentation/Templix#method-offsetunset)
- [offsetExists magic](http://wildsurikat.com/Documentation/Templix#method-offsetexists)
- [\_\_get magic](http://wildsurikat.com/Documentation/Templix#method-__get)
- [\_\_set magic](http://wildsurikat.com/Documentation/Templix#method-__set)
- [\_\_isset magic](http://wildsurikat.com/Documentation/Templix#method-__isset)
- [\_\_unset magic](http://wildsurikat.com/Documentation/Templix#method-__unset)
- [\_\_invoke magic](http://wildsurikat.com/Documentation/Templix#method-__invoke)
- [Attribute Plugins](http://wildsurikat.com/Documentation/Templix#attribute-plugins)- [vars](http://wildsurikat.com/Documentation/Templix#attr-vars)
- [cacheSync](http://wildsurikat.com/Documentation/Templix#attr-cachesync)
- [cacheStatic](http://wildsurikat.com/Documentation/Templix#attr-cachestatic)
- [Markup Plugins](http://wildsurikat.com/Documentation/Templix#native-plugins)- [after](http://wildsurikat.com/Documentation/Templix#plugin-after)
- [append](http://wildsurikat.com/Documentation/Templix#plugin-append)
- [apply](http://wildsurikat.com/Documentation/Templix#plugin-apply)
- [attr](http://wildsurikat.com/Documentation/Templix#plugin-attr)
- [attrappend](http://wildsurikat.com/Documentation/Templix#plugin-attrappend)
- [attrprepend](http://wildsurikat.com/Documentation/Templix#plugin-attrprepend)
- [before](http://wildsurikat.com/Documentation/Templix#plugin-before)
- [case](http://wildsurikat.com/Documentation/Templix#plugin-case)
- [code](http://wildsurikat.com/Documentation/Templix#plugin-code)
- [css](http://wildsurikat.com/Documentation/Templix#plugin-css)
- [else](http://wildsurikat.com/Documentation/Templix#plugin-else)
- [elseif](http://wildsurikat.com/Documentation/Templix#plugin-elseif)
- [end](http://wildsurikat.com/Documentation/Templix#plugin-end)
- [eval](http://wildsurikat.com/Documentation/Templix#plugin-eval)
- [extend](http://wildsurikat.com/Documentation/Templix#plugin-extend)
- [for](http://wildsurikat.com/Documentation/Templix#plugin-for)
- [foreach](http://wildsurikat.com/Documentation/Templix#plugin-foreach)
- [if](http://wildsurikat.com/Documentation/Templix#plugin-if)
- [img](http://wildsurikat.com/Documentation/Templix#plugin-img)
- [include](http://wildsurikat.com/Documentation/Templix#plugin-include)
- [incorpore](http://wildsurikat.com/Documentation/Templix#plugin-incorpore)
- [js](http://wildsurikat.com/Documentation/Templix#plugin-js)
- [link](http://wildsurikat.com/Documentation/Templix#plugin-link)
- [merge](http://wildsurikat.com/Documentation/Templix#plugin-merge)
- [premerge](http://wildsurikat.com/Documentation/Templix#plugin-premerge)
- [submerge](http://wildsurikat.com/Documentation/Templix#plugin-submerge)
- [noparse](http://wildsurikat.com/Documentation/Templix#plugin-noparse)
- [pre](http://wildsurikat.com/Documentation/Templix#plugin-pre)
- [prepend](http://wildsurikat.com/Documentation/Templix#plugin-prepend)
- [remove](http://wildsurikat.com/Documentation/Templix#plugin-remove)
- [replace](http://wildsurikat.com/Documentation/Templix#plugin-replace)
- [return](http://wildsurikat.com/Documentation/Templix#plugin-return)
- [script](http://wildsurikat.com/Documentation/Templix#plugin-script)
- [switch](http://wildsurikat.com/Documentation/Templix#plugin-switch)
- [t](http://wildsurikat.com/Documentation/Templix#plugin-t)
- [var](http://wildsurikat.com/Documentation/Templix#plugin-var)
- [vars](http://wildsurikat.com/Documentation/Templix#plugin-vars)
- [write](http://wildsurikat.com/Documentation/Templix#plugin-write)

Templix syntax
--------------

 The Templix syntax is based on diple sign < and >, so if you want to use them for other purpose than opening or closing a markup declaration, you have to use their html entites equivalent which are > and <.  
 The templix syntax is based on PHP and HTML5/XML, but like HTML5 add the shortcut attribute to XML, Templix add the shortcut value to HTML5: 
```html
<markup "my shortcut value" />  
            
```
 The markup between comment <!-- --> will not be parsed excepting the PHP.

onCompile binder
----------------

 You can bind to templix some callback to trigger when the document is almost compiled and all its DOM is accessible.  
 
```php
$templix->onCompile(function($templix){  
    $templix->find('footer a')->addClass('footer-link');  
});  
            
```


Options
-------

### Dev

 
```php
// re-compile each time  
// add indentation and line feed for code readability  
$templix->setDevTemplate(true); //default true  
  
// add time suffix parameter to local css links to avoid browser caching  
$templix->setDevCss(true); //default true  
  
// add time suffix parameter to local js scripts avoid browser caching  
$templix->setDevJs(true); //default true  
  
// add time suffix parameter to local images to avoid browser caching  
$templix->setDevImg(true); //default false  
  
// add clean callback when switch from prod to dev  
$templix->setCleanCallback(function(){  
      
});  
            
```


### Paths

 
```php
//set compile directory  
$templix->setDirCompile('.tmp/templix/compile/'); //by default  
  
//set cache directory  
$templix->setDirCache('.tmp/templix/cache/'); //by default  
  
//add mtime directory registry to use when you use "cacheSync" attribute  
$templix->setDirSync('.tmp/sync/'); //by default  
  
//set current working directories in order you want templix look for  
$templix->setDirCwd(['template/','surikat/template/']); //by default  
  
//add directories to stack of current working directories  
$templix->addDirCwd(['template/','surikat/template/',]);  
  
//the template file to display on call of $templix->display();  
$templix->setPath($file);  
            
```


### Paths to Plugins

 Paths to plugins are based on class namespace and eventually, autoloading. Each class plugin name end with the upper case of first charater of markup and start with prefix which can be a namespace (ending with \\\\) or simple prefix. 
```php
$prefixDefault = Templix::getPluginPrefixDefault();  
// Templix\\MarkupX\\ , Templix\\MarkupHtml5\\ , Templix\\  
$templix->setPluginPrefix($prefixDefault); //by default  
  
$templix->addPluginPrefix($prefix,$prepend=true); //equivalent to prependPluginPrefix  
$templix->appendPluginPrefix($prefix);  
$templix->prependPluginPrefix($prefix);  
            
```


### Path relativity

 The following rules are valable when you use directly PHP API *display* or *setPath* as same as you use markups *include*, *extend*, *incorpore* or attribute *applyFile*.

 no prefix - look in each working directories of template and each parent templates 
```html
<include "my-template.tml">  
            
```
 "./" prefix - look in priority in same directory than the current template 
```html
<include "./my-template.tml">  
            
```
 "/" prefix - look in priority in at root of working directories in order they are defined 
```html
<include "/my-template.tml">  
            
```
 "//" prefix - look in priority for abosulte path 
```html
<include "//var/www/my-project.dev/templates/my-template.tml">  
            
```


HTML5 Plugins
-------------

### XHTML

 The main differences between HTML5 and XML/XHTML syntax is that in XML syntax we have to close every elements, it support self closing but there is not implicit self closing unlike in HTML5. In XML there is no support for shortcut attributes, all attributes have to be composed by a key and a value. In XML we have also to convert all HTML named entities in their numeric entities equivalent. The doctype is also different but except these few variations we can switch from one to other very simply.   
In Templix if you change html5 doctype declaration "**" to "**", the output syntax will be automaticaly changed to XHTML without any change to do in your templates !   
The parser support the most flexible syntax than is HTML5 with some Templix addons pecificity like shortcut value but, by dint of DOM conversion to PHP object, the output can be changed in XML very easyly. According to [W3C specification](http://www.w3.org/TR/html5/syntax.html#void-elements), the following elements are implicitly self-closed:

- area
- base
- br
- col
- command
- embed
- hr
- img
- input
- keygen
- link
- meta
- param
- script
- source
- style
- track
- wbr

 You can found how the self-closed implemation is done by taking a look at "*Wild\\Templix\\MarkupHtml5*" namespace in "*surikat/php/Wild/Templix/MarkupHtml5*" directory.
 
Markup Object Methods
---------------------

 Markups object will be called node in following documtentation.

### closest

 The closest method is used to find through the node's ancestors the first matching element which are closest from the current node. 
```php
$node->closest('form');  
//will find the enclosing form if there is one  
            
```


### searchNode

 The searchNode method is used to find the index of a node in the children nodes of the node if it's there. The second parameter can be used to start search from an index. 
```php
$index = $node->searchNode($searchingNode);  
$index = $node->searchNode($searchingNode,2);  
            
```


### match

 The match method is used to determine if a node is corresponding to a selector. 
```php
$node->match('#node-id');  
$node->match('a.my-class');  
$node->match('a[href="Documentation/Templix"]');  
            
```


### find

 The find method is used to find matching selector in all enclosed nodes. The second parameter can be used to specify an index of result.   
If you specify an index to "*true*" the result will not be an array of nodes but a nodes iterator object which you'll can traverse like an array and using a foreach but which can also be used to call sub methods like to a regular node.  
 
```php
foreach($node->find('img') as $img){  
    if(!$img->alt)  
        $img->alt = basename($img->src);  
}  
  
$node->find('a',0); //will get the first node of results  
$node->find('a',1); //will get the second node of results  
  
$allA = $node->find('ul>li',true)->find('a');  
$node->find('ul>li',true)->remove();  
            
```


### children

 The children method is used to find matching selector in first sub-level of nodes. Like in find method, the second parameter can be used to specify an index of result.   
If you specify an index to "*true*" the result will not be an array of nodes but a nodes iterator object which you'll can traverse like an array and using a foreach but which can also be used to call sub methods like to a regular node.  
 
```php
foreach($node->children('img') as $img){  
    if(!$img->alt)  
        $img->alt = basename($img->src);  
}  
  
$node->children('a',0); //will get the first node of 'a' children  
$node->children('a',1); //will get the second node of 'a' children  
  
$childrenA = $node->children('ul>li',true)->children('a');  
$node->children('ul>li',true)->remove();  
            
```


### merge

 The merge method will merge the parameter node passed to method with children nodes of the node.  
 If an equivalent node allready exists the node will not be added to avoid duplication. If the parameter is scalar value it will be converted to a tree of nodes.  
 If the element didn't allready exists, it will be added after existing ones. 
```php
$node->merge($otherNode);  
$node->merge('</li>unique element</li>');  
            
```


### premerge

 The premerge method will merge the parameter node passed to method with children nodes of the node.  
 If an equivalent node allready exists the node will not be added to avoid duplication. If the parameter is scalar value it will be converted to a tree of nodes.  
 Contrary to merge if the element didn't allready exists, it will be added before and not after existing ones. 
```php
$node->premerge($otherNode);  
$node->premerge('</li>unique element</li>');  
            
```


### submerge

 The submerge method will merge children nodes of the parameter node passed to method with children nodes of the node.  
 Like in merge, if an equivalent node allready exists the node will not be added to avoid duplication. If the parameter is scalar value it will be converted to a tree of nodes. 
```php
$node->submerge($otherNode);  
$node->submerge('<ul></li>unique element</li></ul>');  
            
```


### isSameNode

 The isSameNode method will compare the node to the node parameter based on children nodes, attributes and class name and will return a boolean. It's an equivalence comparison and not a strict comparison based on object memory reference. 
```php
var\_dump( $node===$node ); //true  
var\_dump( $node->isSameNode($node) ); //true  
  
var\_dump( $node===$otherNode ); //false  
var\_dump( $node->isSameNode($otherNode) ); //true  
            
```


### getAttributes

 The getAttributes method allow you to get the attributes as an associative array. 
```php
$attributes = $node->getAttributes();  
            
```


### hasAttribute

 The hasAttribute method allow you to know if an attribute is defined. 
```php
if($node->hasAttribute('title')){  
      
}  
            
```


### getElementsByTagName

 The getElementsByTagName method is like the regular javascript method, it get the elements by tag name recursively starting with the calling node itself. 
```php
$divs = $node->getElementsByTagName('div');  
            
```


### write

 The write method will clean the inner head, inner foot and children nodes before appending parameter, head and foot will be conserved. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->write($nodes);  
$node->write('<span>New inner content</span>');  
$node->write('New inner content');  
            
```


### append

 The append method will add the parameter to children nodes after the existing ones. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->append($nodes);  
$node->append('<span>New appending content</span>');  
$node->append('New appending content');  
            
```


### prepend

 The append method will add the parameter to children nodes before the existing ones. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->prepend($nodes);  
$node->prepend('<span>New prepending content</span>');  
$node->prepend('New prepending content');  
            
```


### each

 The each method receive a callback as argument. It will apply on the node or iterate through an iterator node and apply on each node. 
```php
$node->find('a',true)->each(function($a){  
    echo $a->href."<br>";  
});  
            
```


### replaceWith

 The replaceWith method allow you to replace a node with an other in parent's children nodes. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->replaceWith($otherNode);  
$node->replaceWith('<div>replaced</div>');  
            
```


### remove

 The remove method will remove the node from parent's children nodes. 
```php
$node->remove();  
            
```


### applyFile

 The applyFile method will read the filename, usually a ".tpl" file, which contain applicators markup to modify the node like the first level of markups do in extend. 
```php
$node->applyFile($filename);  
            
```


### before

 The before method will add the parameter just before the node in parent's children nodes. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->before($nodes);  
$node->before('<span>Before content</span>');  
$node->before('Before content');  
            
```


### after

 The after method will add the parameter just after the node in parent's children nodes. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->after($nodes);  
$node->after('<span>After content</span>');  
$node->after('After content');  
            
```


### getIndex

 The getIndex method return the index of the node in parent's children nodes. 
```php
$index = $node->getIndex();  
            
```


### getInnerMarkups

 The getInnerMarkups method return the string version of inner children nodes. 
```php
$string = $node->getInnerMarkups();  
            
```


### getInner

 The getInner method return the string version of inner head, then inner children nodes, and finaly inner foot. 
```php
$string = $node->getInner();  
            
```


### \_\_toString

 The \_\_toString method return the whole node and all enclosed node as a string. This magic method is returned when you try to cast the node as string. 
```php
$string = $node->\_\_toString();  
$string = (string)$node;  
$string = $node.'';  
            
```


### clear

 The clear method erase head, inner head, children nodes, inner foot, foot, previous sibling, next sibling, detach itself from the next and previous flow and set hiddenWrap to hide markup opener and closer output. 
```php
$node->clear();  
            
```


### clearInner

 The clearInner method erase inner head, children nodes and inner foot. 
```php
$node->clearInner();  
            
```


### head

 The head method unshift a raw content or source code to the head of the node, before opening markup. A second parameter can be used to specify a splice index. If the splice index is true the raw content will be pushed instead of unshifted. 
```php
$node->head('<?php echo time();?>');  
$node->head($raw,2);  
$node->head($raw,true);  
            
```


### foot

 The foot method push a raw content or source code to the foot of the node, after closing markup. A second parameter can be used to specify a splice index. If the splice index is true the raw content will be unshifted instead of pushed. 
```php
$node->head('<?php echo time();?>');  
$node->head($raw,2);  
$node->head($raw,true);  
            
```


### innerHead

 The innerHead method unshift a raw content or source code to the inner head of the node, after opening markup. A second parameter can be used to specify a splice index. If the splice index is true the raw content will be pushed instead of unshifted. 
```php
$node->innerHead('<?php echo time();?>');  
$node->innerHead($raw,2);  
$node->innerHead($raw,true);  
            
```


### innerFoot

 The innerFoot method push a raw content or source code to the inner foot of the node, before closing markup. A second parameter can be used to specify a splice index. If the splice index is true the raw content will be unshifted instead of pushed. 
```php
$node->innerFoot('<?php echo time();?>');  
$node->innerFoot($raw,2);  
$node->innerFoot($raw,true);  
            
```


### attr

 The attr method is a getter or setter for accessing attributes. It will be a getter with one argument and a setter with two arguments. 
```php
$node->attr('src','images/logo.png');  
$src = $node->attr('src');  
            
```


### tmpAttr

 The attr method is a getter or setter for accessing temporary attributes.   
Because of extend or apply, the DOM can be re-compiled to string and re-parsed. In this processus, all unvisible meta-data you can add to your object, like with the data method, will be wiped. So, there is a convention for passing meta-data in a node with the urlencoded key-value pairs "*tmp-attr*" attribute. This attribute is a visible attribute working with not "*hiddenWrap*" nodes (visible opening and closing markup), but they will be removed automaticaly just before the end of global compilation.   
It will be a getter with one argument and a setter with two arguments. 
```php
$node->tmpAttr('meta-data',$data);  
$meta = $node->tmpAttr('meta-data');  
            
```


### removeAttr

 The removeAttr method remove an attribute from opening markup of node. 
```php
$node->removeAttr('class');  
            
```


### remapAttr

 The remapAttr method is used for add a key to a shortcut attribute or shortcut value according to its order in attributes. The first argument specify the key to add and the second argument the index of shortcut, starting with zero. The index is zero by default. 
```php
class Mynode extend \\Wild\\Templix\\Markup{  
    function load(){  
        $this->remapAttr('src');  
        $this->remapAttr('async',1);  
        $src = $this->src;  
        $async = $this->async;  
    )  
}  
            
```


### data

 The data method is a getter or setter for accessing meta-data unvisible attributes.   
Because of extend or apply, the DOM can be re-compiled to string and re-parsed. In this processus, all unvisible meta-data you can add to your object, like with the data method, will be wiped. To work around this behavior use [tmpAttr](http://wildsurikat.com/Documentation/Templix#method-tmpattr) instead of data.   
It will be a getter with one argument and a setter with two arguments. 
```php
$node->data('meta-data',$data);  
$meta = $node->data('meta-data');  
            
```


### css

 The css method is a getter or setter for accessing css properties of style attribute. It will be a getter with one argument and a setter with two arguments. 
```php
$height = $node->css('height');  
if(substr($height,-2)=='px')  
    $height = substr($height,0,-2);  
$node->css('height',($height+120).'px');  
            
```


### removeClass

 The removeClass method allow you to work on class attribute by removing class in a regular way without to have to work on class string attribute directly. 
```php
$node->removeClass('my-class');  
            
```


### addClass

 The addClass method allow you to work on class attribute by adding class in a regular way without to have to work on class string attribute directly and avoiding duplication. 
```php
$node->addClass('my-class');  
            
```


### wrap

 The wrap method allow you to enclose a node or a tree of nodes in a node. If you pass it a tree of node it will use the first top encloser node as the wrapper. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node->wrap($wrapperNode);  
$node->wrap('<div class="my-wrapper" />');  
            
```


### unwrap

 The unwrap method allow you to remove a wrapper. You can also use a selector to specify the closest matching wrapper you want to remove from ancestors. By default, it will be the closest encloser (selector "*\**"). 
```php
$node->unwrap();  
$node->unwrap('div.my-wrapper');  
            
```


### createChild

 The createChild method will create a node in children node from scalar content. 
```php
$div = $node->createChild('<div />');  
            
```


### recursive

 The recursive method allow you to execute a callback on each node recursively and also break the recursion from callback context. The callback will be executed from deepers elements to top. 
```php
$node->recurse(function($subnode,&$break){  
    if($subnode->attr('data-find')){  
        $break = true; //break the recursion  
    }  
});  
            
```


### arecursive

 The recursive method allow you to execute a callback on each node recursively and also break the recursion from callback context. Contrary to recursive the callback will be executed from top elements to deepers. 
```php
$node->arecurse(function($subnode,&$break){  
    if($subnode->attr('data-find')){  
        $break = true; //break the recursion  
    }  
});  
            
```


### getIterator magic

 The getIterator magic method allow you to work with children nodes like if they were array of nodes and iterate over them with a foreach loop. 
```php
foreach($node as $childNode){  
      
}  
            
```


### offsetSet magic

 The offsetSet magic method allow you to work with children nodes like if they were an array of nodes and set a child node like an offset. If the parameter is scalar value it will be converted to a tree of node. 
```php
$node[] = $appendNode;  
$node[] = '<a href="http://wildsurikat.com">Surikat Framework</a>';  
$node[5] = $indexedNode;  
            
```
 This is equivalent to: 
```php
$node->append($appendNode);  
$node->append('<a href="http://wildsurikat.com">Surikat Framework</a>');  
$node->append($indexedNode,5);  
            
```


### offsetGet magic

 The offsetGet magic method allow you to work with children nodes like if they were an array of nodes and get a child node like an offset. 
```php
$childNode4 = $node[4];  
            
```
 This is equivalent to: 
```php
$childNode4 = $node->children('\*',4);  
            
```


### offsetExists magic

 The offsetGet magic method allow you check if a child node exists. 
```php
if(isset($node[0])){  
      
}  
            
```
 This is equivalent to: 
```php
if(!is\_null($node->children('\*',0))){  
      
}  
            
```


### offsetUnset magic

 The offsetGet magic method allow you to remove a child node. 
```php
unset($node[1]);  
            
```
 This is equivalent to: 
```php
$node[1]->remove();  
            
```


### \_\_get magic

 The \_\_get magic method allow you to directly get an attribute. 
```php
$src = $node->src;  
            
```
 This is equivalent to: 
```php
$src = $node->attr('src');  
            
```


### set magic

 The \_\_set magic method allow you to directly set an attribute. 
```php
$node->src = $src;  
            
```
 This is equivalent to: 
```php
$node->attr('src',$src);  
            
```


### \_\_isset magic

 The \_\_isset magic method allow you to directly check if node has an attribute. 
```php
if(isset($node->src)){  
      
}  
            
```
 This is equivalent to: 
```php
if($node->hasAttribute('src')){  
      
}  
            
```


### \_\_unset magic

 The \_\_unset magic method allow you to directly remove an attribute. 
```php
unset($node->src);  
            
```
 This is equivalent to: 
```php
$node->removeAttr('src');  
            
```


### \_\_invoke magic

 The \_\_invoke magic method allow you to directly work with a collection iterator. 
```php
$node('ul>li>a')->addClass('my-class');  
            
```
 This is equivalent to: 
```php
$node->find('ul>li>a',true)->addClass('my-class');  
            
```


Native Plugins
--------------

### Attribute Plugins

 Some attributes trigger special behaviors injections and then becomes unvisible. The way to implements an attribute trigger function to a markup is to implements a method which will be named with *load* prefix followed by upper case first character of attribute name. The hyphen "-" in attribute name will be replaced by underscore "\_" in method name. If you want to capture all attributes which is prefixed by a name followed by hyphen "-", like "data-" for example, you can implements "loadAttr" method ending with underscore "\_". Let's take some example: 
```html
<mymarkup src="path.ext" data-meta="Some metadata" data-other="Other metadata" />  
            
```
 
```php
class Mymarkup{  
    function loadSrc($v){  
        var\_dump( $v ); //will output 'path.ext'  
    }  
    function loadData\_meta($v){  
        var\_dump( $v ); //will output 'Some metadata'  
    }  
    function loadData\_($v,$k){  
        var\_dump( $v ); //will output 'Some metadata' and 'Other metadata'  
        var\_dump( $k ); //will output 'meta' and 'other'  
    }  
}  
            
```


### Universal Attribute Plugins:

#### vars

 The vars attribute is used to wrap inner content with [sprintf](http://php.net/manual/en/function.sprintf.php) interpolation function. 
```html
<?$name = 'Jo';?>  
<?$lastname = 'Surikat';?>  
<span vars="'Jo','Surikat'">Hi %s !</span>  
<span vars="$name,$lastname">Hi %s %s !</span>  
            
```


#### cacheSync

 The cacheSync attribute is used with a sync path. The content of the markup will be cached and regenered only if its modified time is older than the modified time of the sync path. 
```html
<ul cacheSync="tracks">  
<foreach "$model->getTracks() as $k=>$v">  
    <li><?=$k?>:<?=$v?></li>  
</foreach>  
</ul>  
            
```
 To update the cache 
```php
touch('.tmp/sync/tracks.sync');  

```
 For configure the path of sync files: 
```php
$templix->setDirSync('.tmp/sync/'); //by default  
            
```


#### cacheStatic

 The cacheStatic attribute is used as shortcut attribute to cache indefinitely the content of the markup. 
```html
<ul cacheStatic>  
<foreach "$model->getTracks() as $k=>$v">  
    <li><?=$k?>:<?=$v?></li>  
</foreach>  
</ul>  
            
```


### Markup Plugins:

#### after

 Markup usage of [after method](http://wildsurikat.com/Documentation/Templix#method-after). The after markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will add its content in document just after its selector targeted node(s). 
```html
<extend>  
    <after main>  
        <img src="img/signature.png">  
    </after>  
    <after "main>article:nth-child(2)">  
        <article>Bla bla bla ...</article>  
    </after>  
</extend>  
            
```


#### append

 Markup usage of [append method](http://wildsurikat.com/Documentation/Templix#method-append). The append markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will add its content at end inside its selector targeted node(s). 
```html
<extend>  
    <append main>  
        <img src="img/signature.png">  
    </append>  
    <append "body>main">  
        <article>Bla bla bla ...</article>  
    </append>  
</extend>  
            
```


#### apply

 Markup usage of [applyFile method](http://wildsurikat.com/Documentation/Templix#method-applyfile). It's the reversed process of <extend>: the *.tpl* file will be able to use selector markups for work on the content of <apply>. The *.tpl* file is like a kind of application patcher function. 
```html
<apply "form-validation.tpl">  
    <form>  
        <!-- ... -->  
    </form>  
</apply>  
            
```
 The *{{this:property}}* special syntax, specific to apply, allow you to access attributes of current targeted node tu build your apply in a more flexible and dynamic way. Tpl file: 
```html
<write selector="textarea[name]">  
    <?=isset($\_POST['{{this:name}}'])?$\_POST['{{this:name}}']:'{{this:value}}'?>  
</write>  
            
```
 The *{{compile:callback()}}* special syntax, specific to apply, allow you to pre-compile some portions of code using attributes of current targeted node tu build a faster and more consistent compiled template. Tpl file: 
```html
<after selector="input[name][type!=checkbox][type!=hidden], select[name], textarea[name]">  
    <?  
        if(isset($formErrors)&&isset($formErrors["{{compile:  
            rtrim(str\_replace(array('[',']'),array('.',''),'{{this:name}}'),'.')  
        }}"])){  
            ?><small class="help-block"><?=$formErrors["{{compile:  
                rtrim(str\_replace(array('[',']'),array('.',''),'{{this:name}}'),'.')  
            }}"]?></small><?  
        }  
    ?>  
</after>  
            
```


#### attr

 Markup usage of [attr method](http://wildsurikat.com/Documentation/Templix#method-attr). The attr markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will set its selector targeted node(s) attributes to its attributes and can also use some special behaviors starting by add or remove like addClass or removeClass. 
```html
<extend>  
    <attr selector="main > article:eq(0) > img:eq(2)" alt="Name for my image">  
    <attr "img.my-logo" alt="My Logo" src="img/logo.png">  
    <attr main addClass="about">  
</extend>  
            
```


#### attrappend

 The attrappend markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will append its attributes to its selector targeted node(s) attributes. 
```html
<extend>  
    <attrappend "img.my-logo" alt=" - Me">  
</extend>  
            
```


#### attrprepend

 The attrprepend markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will prepend its attributes to its selector targeted node(s) attributes. 
```html
<extend>  
    <attrprepend "img.my-logo" alt="Me -">  
</extend>  
            
```


#### before

 Markup usage of [before method](http://wildsurikat.com/Documentation/Templix#method-before). The before markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will add its content in document just before its selector targeted node(s). 
```html
<extend>  
    <before main>  
        <img src="img/signature.png">  
    </before>  
    <before "main>article:nth-child(2)">  
        <article>Bla bla bla ...</article>  
    </before>  
</extend>  
            
```


#### case

 Case is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<switch "$switcher">  
    <case hello>  
        Hello  
    </case>  
    <case "bye" />  
        Bye  
    <break>  
</switch>  
            
```


#### code

 The code markup allow you to put unparsed code like in <script> , <style> or <noparse>. It's content will be converted to html entities. The following content will display like this without interpretation. 
```html
<code class="lang-xml">  
    <switch "$switcher">  
        <case hello>  
            Hello  
        </case>  
        <case "bye" />  
            Bye  
        <break>  
    </switch>  
</code>  
            
```


#### css

 The css markup can be used everywhere in document, even inside <extend> first level, to add a stylesheet link to head of document. If a link element whiche have href to the same url is allready present in head, it will not be duplicate. If the href is absolute or start with slash "*/*" default the prefix path "css/" will not be added. If the url isn't absolute and doesn't end with "*.css*" extension, the extension will be automaticaly added. 
```html
<css style>  
<css "/path/to/my/stylesheet.css">  
            
```


#### else

 elseif is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<if "$cond">  
  
<else>  
  
</if>  
  
<if "$cond" />  
  
<else>  
  
<end>  
            
```


#### elseif

 elseif is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<if "$cond">  
  
<elseif "$cond">  
  
</if>  
  
<if "$cond" />  
  
<elseif "$cond">  
  
<end>  
            
```


#### end

 end is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php) corresponding to "}". 
```html
<if "$cond" />  
  
<end>  
      
<switch "$switcher" />  
  
<end>  
  
<foreach "$var as $v" />  
  
<end>  
            
```


#### eval

 The eval markup can be used to execute the php independently of the rest of document so that the output can be parsed after by Templix. 
```php
$templix['outsideVar'] = true;  
            
```
 
```html
<?$insideVar = true;?>  
<eval>  
    <?  
    //$outsideVar is defined here  
    //$insideVar is not defined here  
      
    echo '<img src="img/logo.png">';  
    ?>  
</eval>  
            
```
 If the image is found, height and with will be added by the parser (see [img markup](http://wildsurikat.com/Documentation/Tamplix#plugin-img)).

#### extend

 The extend markup will refer to a wrapper template, usualy in first level is the layout.  
 There can be many extend inside same template and you can extend an allready extended template file recursively.  
 It will suffix file name with "*.xtml*" by default and if it was left empty the default wrapper file will be "*.xtml*". It will contain other specifics elements that will work on DOM like: [write](http://wildsurikat.com/Documentation/Templix#plugin-write), [append](http://wildsurikat.com/Documentation/Templix#plugin-append), [prepend](http://wildsurikat.com/Documentation/Templix#plugin-prepend), [after](http://wildsurikat.com/Documentation/Templix#plugin-replace), [before](http://wildsurikat.com/Documentation/Templix#plugin-replace), [remove](http://wildsurikat.com/Documentation/Templix#plugin-remove), [replace](http://wildsurikat.com/Documentation/Templix#plugin-replace), [merge](http://wildsurikat.com/Documentation/Templix#plugin-merge), [premerge](http://wildsurikat.com/Documentation/Templix#plugin-premerge), [submerge](http://wildsurikat.com/Documentation/Templix#plugin-submerge), [attr](http://wildsurikat.com/Documentation/Templix#plugin-attr), [attrprepend](http://wildsurikat.com/Documentation/Templix#plugin-attrprepend), [attrappend](http://wildsurikat.com/Documentation/Templix#plugin-attrappend), [css](http://wildsurikat.com/Documentation/Templix#plugin-css), [js](http://wildsurikat.com/Documentation/Templix#plugin-js). 
```html
<extend>  
    <main>  
        <h1>Hi</h1>  
    </main>  
</extend>  
            
```
 
```html
<extend "header.xtml">  
    <append "title"> - Surikat</append>  
</extend>  
<extend "footer.xtml">  
    <prepend "footer">Surikat -</prepend>  
</extend>  
            
```
 The first level markups will be applied in order. In the following example the <h1> content "*Hi*" will be overwrited by "*Hello*" 
```html
<extend>  
    <main>  
        <h1>Hi</h1>  
    </main>  
    <write "main>h1:eq(0)">  
        Hello  
    </write>  
</extend>  
            
```
 
```html

```
 If the markup in first level is not an expected markup planned to work on DOM, it will be converted to <write> markup and its name and attributes to selector. Let's take an example, this: 
```html
<extend>  
    <article id="something" class="interesting">  
        <h2>Something interesting</h2>  
    </article>  
</extend>  
            
```
 is equivalent to this: 
```html
<extend>  
    <write "article[class='interesting'][id='something']">  
        <h2>Something interesting</h2>  
    </write>  
</extend>  
            
```


#### for

 for is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<for "$i=0;$i<10;$++">  
      
</for>  
  
<for i="10">  
      
</for>  
  
<for from="0" to="10">  
      
</for>  
            
```


#### foreach

 foreach is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<foreach "$var as $k=>$v">  
    <?php echo $k;?>:<?php echo $v;?></foreach>  
  
<foreach "$var" key="k" val="v">  
    <?php echo $k;?>:<?php echo $v;?></foreach>  
            
```


#### if

 if is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<if "$cond">  
      
</if>  
  
<if "$cond" />  
  
<end>  
            
```


#### img

 If src is local, height or with is not defined and the file can be found, height and with attributes will be extracted and added automaticaly for improve browser rendering performances.  
 If [devImg](http://wildsurikat.com/Documentation/Templix#options) options is set to true, it will add a time suffix to avoid browser caching mechanism.

#### include

 The include markup will compile a sub-template in a way that make it included by regular include from caller compiled template. It's not possible to work on the included template DOM from caller DOM, but the included template can access to caller DOM and work on it. 
```html
<incude "path/to/my/included-template.tml">  
            
```


#### incorpore

 The incorpore markup will completely incorpore a sub-template in the current template workflow. It's possible to work on the incorpored template DOM from caller DOM and the incorpored template can access to caller DOM and work on it too. 
```html
<incude "path/to/my/incorpored-template.tml">  
            
```


#### js

 The js markup can be used everywhere in document, even inside <extend> first level, to add a [$js](http://wildsurikat.com/Documentation/JS) script call to the last script of body. If a [$js](http://wildsurikat.com/Documentation/JS) call which have src to the same url is allready present in <script>, it will not be duplicate. 
```html
<js script>  
<js "/path/to/my/script.js">  
            
```


#### link

 Regular HTML5 <link> markup. If Templix [devCss](http://wildsurikat.com/Documentation/Templix#options) options is set to true, it will add a time suffix to its href to avoid browser caching mechanism

#### merge

 Markup usage of [merge method](http://wildsurikat.com/Documentation/Templix#method-merge). The merge markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will merge its nodes with children nodes of its selector targeted node(s). If an equivalent node allready exists the node will not be added to avoid duplication. 
```html
<extend>  
    <merge "body>main">  
        <article>Bla bla bla ...</article>  
    </merge>  
</extend>  
            
```


#### noparse

 The parser not parse the markups inside it excepting pure PHP code. The parser will be turned off until it meet the ending markup <script>. There is a same implemation for the style and script markup. 
```html
class Noparse extends \\Wild\\Templix\\Markup{  
    protected $hiddenWrap = true;  
    protected $noParseContent = true;  
}  
            
```


#### pre

 The pre markup allow you to put unparsed code like in <script> , <style> or <noparse>. It's content will be converted to html entities.

#### premerge

 Markup usage of [premerge method](http://wildsurikat.com/Documentation/Templix#method-premerge). The premerge markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will merge its nodes with children nodes of its selector targeted node(s). If an equivalent node allready exists the node will not be added to avoid duplication. Contrary to merge if the element didn't allready exists, it will be added before and not after existing ones. 
```html
<extend>  
    <premerge "body>main">  
        <article>Bla bla bla ...</article>  
    </premerge>  
</extend>  
        </p>  
          
        <h4 id="plugin-prepend">prepend</h4>  
        <p>  
            Markup usage of <a href="Documentation/Templix#method-prepend">prepend method</a>.  
            The prepend markup have to be used at first level inside <extend>  
            or in "*.tpl*" with apply.  
            It will add its content at top inside its selector  
            targeted node(s).  
            <code class="lang-xml">  
<extend>  
    <prepend main>  
        <img src="img/signature.png">  
    </prepend>  
    <prepend "body>main">  
        <article>Bla bla bla ...</article>  
    </prepend>  
</extend>  
            
```


#### remove

 Markup usage of [remove method](http://wildsurikat.com/Documentation/Templix#method-remove). The remove markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will remove its selector targeted node(s). 
```html
<extend>  
    <remove "span.some-widget">  
</extend>  
            
```


#### replace

 The replace markup will replace the content of its selector targeted node(s) by its own content. 
```html
<extend>  
    <replace "body>main>article:eq(0)">  
        <article>Bla bla bla ...</article>  
    </replace>  
</extend>  
            
```


#### return

 Return is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<return "$result">  
            
```


#### script

 Regular HTML5 <script> markup, with implicit type="text/javascript" if not defined. If he have src attribute and Templix [devJs](http://wildsurikat.com/Documentation/Templix#options) options is set to true, it will add a time suffix to its src to avoid browser caching mechanism.

#### submerge

 Markup usage of [submerge method](http://wildsurikat.com/Documentation/Templix#method-submerge). The submerge markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will merge its children nodes with children nodes of its selector targeted node(s). Like in merge, if an equivalent node allready exists the node will not be added to avoid duplication 
```html
<extend>  
    <submerge "body>main">  
        <article>Bla bla bla ...</article>  
        <article>And Bla bla bla ...</article>  
    </submerge>  
</extend>  
            
```


#### switch

 Switch is a basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php). 
```html
<switch "$switcher">  
    <case hello>  
        Hello  
    </case>  
    <case "bye" />  
        Bye  
    <break>  
</switch>  
  
<switch "$switcher" />  
  
<end>  
            
```


#### t

 The t markup can be used like [vars attribute](http://wildsurikat.com/Documentation/Templix#attr-vars), is transparent and can be used to work with gettext translation and sprintf. 
```html
<?$name = 'Jo';?>  
<?$lastname = 'Surikat';?>  
<t "'Jo','Surikat'">Hi %s %s !</t>  
<t "$name,$lastname">Hi %s %s !</t>  
            
```


#### var

 The var markup can be used to assign raw content to a variable. The variable can be regenered each time or cached if static attribute is shortcut attribute is used. 
```html
<var compilation static>  
    <span>Timestamp at compilation: <?=time()?>.</span>  
</var>  
<var execution>  
    <span>Timestamp execution: <?=time()?>.</span>  
</var>  
  
<?=$compilation?>  
<?=$execution?>  
            
```


#### vars

 The vars markup will look for a "vars.$name.php" file in the template include path(s). This file will be included as dynamic but the variables it makes can also be incorpored as static content adding it the shortcut attribute "*static*". 
```html
<vars basic />  
<vars "my-static-vars" static />  
            
```


#### write

 Markup usage of [write method](http://wildsurikat.com/Documentation/Templix#method-write). The write markup have to be used at first level inside <extend> or in "*.tpl*" with apply. It will write its content inside its selector targeted node(s), overwrite its inner content. 
```html
<extend>  
    <write main>  
        <article>Bla bla bla ...</article>  
    </write>  
</extend>  
            
```


Custom Plugins
--------------

### Build your own plugins

 To build your own plugins you have to set plugin prefix class path and then make a corresponding prefixed class.  
 You have to extend this class from "*\\Wild\\Templix\\Markup*". Let's take an example: 
```php
$templix->addPluginPrefix('Wild\\Plugin\\Templix\\Markup\\');  
            
```
 
```html
<markdown>  
    # [See Away, Be Lite, Run Fast](http://wildsurikat.com) ![Logo of Surikat](http://wildsurikat.com/img/surikat.png) [SURIKAT](http://wildsurikat.com)  
    [The essential framework for web developers](http://wildsurikat.com)  
</markdown>  
            
```
 From *Wild\\Plugin\\Templix\\Markup\\Markdown.php* 
```php
namespace Wild\\Plugin\\Templix\\Markup;  
class Markdown extends \\Wild\\Templix\\Markup {  
    protected $hiddenWrap = true;  
    protected $noParseContent = true;  
    function load(){  
        $this->remapAttr('file');  
        if($this->file)  
            $text = file\_get\_contents($this->file);  
        else{  
            $text = $this->getInnerMarkups();  
            $x = explode("\\n",$text);  
            foreach($x as &$v)  
                $v = ltrim($v);  
            $text = implode("\\n",$x);  
        }  
        $this->clearInner();  
          
        $md = new Parsedown();  
        $this->innerHead[] = $md->text($text);  
    }  
}  
            
```


### Class name of plugins

 Class name coresponding to prefix followed by upper case first character of markup name. If the markup name contains special characters they will be replaced by underscore "*\_*" for class lookup.

 
```html
    <my-markup></my-markup>  

```
 
```php
namespace Wild\\Plugin\\Templix\\Markup; //here is the namespace prefix  
class My\_markup extends \\Wild\\Templix\\Markup {}  
        
```
### Methods of plugins

 The load method of the class is triggered when your markup is closed, by closing markup, self closing or implicit self closed. All DOM which is loaded before is accessible.  
 You can also implements the loaded method which is triggered when the whole document is loaded and so accessible from the method.  
 From the class you can access the attributes of the markup and all DOM with the [markup object methods](http://wildsurikat.com/Documentation/Templix#markup-methods). 
```php
class Mymarkup extends \\Wild\\Templix\\Markup {  
    function load(){  
        var\_dump( $this->getAttributes() );  
    }  
    function loaded(){  
        var\_dump( $this->closest('div')->getAttributes() );  
    }  
}  
            
```


### Special properties of plugins

 There are some special properties of markup class that can be overloaded to add special behaviors.  
 The hiddenWrap property, when set to true, tell templix that this markup have no output for its opening tag, closing tag, and so its attributes. Only its head, foot, and inner content will be displayed. Examples of this implemation are [t](http://wildsurikat.com/Documentation/Templix#plugin-t), [noparse](http://wildsurikat.com/Documentation/Templix#plugin-noparse), [vars](http://wildsurikat.com/Documentation/Templix#plugin-style) and all basic [php syntax structural element](http://php.net/manual/en/language.control-structures.php) or markup which will rewrite its content on load.   
 The noParseContent tell to the parser to not parse the markups inside it excepting pure PHP code. The parser will be turned off until it meet the ending markup corresponding to opened noParseContent markup, in this example </mymarkup>. Examples of this implemation are [noparse](http://wildsurikat.com/Documentation/Templix#plugin-noparse), [script](http://wildsurikat.com/Documentation/Templix#plugin-script), [style](http://wildsurikat.com/Documentation/Templix#plugin-style), [code](http://wildsurikat.com/Documentation/Templix#plugin-code), and [pre](http://wildsurikat.com/Documentation/Templix#plugin-pre). 
```php
class Mymarkup extends \\Wild\\Templix\\Markup {  
    protected $hiddenWrap = true;  
    protected $noParseContent = true;  
}  
            
```

