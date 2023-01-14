
Orderered vs Unordered Nodes and Trees

First to know, ordered versus unordered refers to whether or not the tree structure is required to keep child nodes 
of a given node in any particular order.  For example, if the payload of the node is an object representing a file 
and you want the files presented in alphabetical order, then you would choose an ordered tree to handle that use case.  
Unordered trees do not keep track of the order of the children for any nodes. 

Second, the typical usage would be to use unordered nodes in an unordered tree and ordered nodes in an ordered tree 
(seems obvious but....).  Because everything is coded to interfaces and TreenodeOrdered extends Treenode, there's no 
theoretical reason why you could not use ordered nodes in an unordered tree.  But it does not buy you anything to do 
so, because the machinery for populating an unordered tree does not look at the index field which is used to keep 
track of the order of the children for a given node.  In other words, stick with using unordered nodes for unordered 
trees.

Unordered nodes only deal with integers used as pointers.  Each node has an integer nodeid, integer treeid, integer 
parentid and then a value, which is untyped.  The (unordered) Tree object keeps an array of nodes and so any time 
you need a node for an operation, you get it through the tree.  The Tree has methods like getNode, getParentOf, 
getChildrenOf, etc. The intention was to create a simple implementation of a tree structure and all the work of any 
significance is handled by the tree.  The nodes themselves consist really of just setters and getters for the 
properties of a node.  If it is not important that the children of a node be kept in any particular order, this 
implementation has a smaller interface and thus would be easier to use.

By contrast, ordered nodes and ordered trees are more complicated.  Ordered nodes have the same integer pointers in 
their structure that unordered nodes do, but they also keep references to actual objects in the 
tree.  So alongside keeping the treeid, an ordered node also keeps the actual tree as a reference.  Same is true for 
parentid and parent.  Values are handled identically between the two flavors of nodes.

Children are handled completely differently in ordered nodes.  The ordered node uses an OrderedList object to hold the 
child nodes and keep them in order.  So ordered nodes have a children property which is an Orderedlist (coded to the 
interface OrderedListInterface).

The following methods are common to both ordered and unordered nodes and are implemented in a single trait called 
TreenodeTrait.

public function setNodeId(): void;
public function getNodeId(): int;

public function setParentId(?int $parentId): void;
public function getParentId(): ?int;

public function setTreeId(int $treeId): void;
public function getTreeId(): ?int;

public function setValueValidator(callable $callable) : void;
public function getValueValidator() : ?callable;

public function setValue($value): void;
public function getValue();

public function hydrate(array $nodeData): void;
public function dehydrate(): array;

The only other method that is part of the interface for unordered nodes is unsetReferences.  Because ordered nodes 
have additional references (actual parent, actual tree), the implementations of these methods has to be different and 
so cannot be implemented in TreenodeTrait.  UnsetReferences is implemented in each class separately.  The effect of 
the method is the same, however.  The node ends up with no attributes set at all.

Ordered nodes have several additional methods, but the first one to discuss is the setReferences method.  


Interface for Trees

Ordered and unordered trees have very similar interfaces.  One difference between the two pertains to the 
ways you get nodes into a tree.  The tree class accepts anything that implements TreenodeInterface.  However, the 
TreeOrdered class only accepts nodes that implement TreenodeOrderedInterface.  This difference comes up in two 
different methods used to add nodes to the tree.  One of those is the setNodes method, which takes an array of nodes 
and puts them all in the tree at once.  It is designed to make it easy to hydrate a tree from a data store.  The 
second method is the add method, which adds nodes one at a time to the tree.

Another difference pertains to methods that return nodes:  getNode($nodeid), getRoot(), getParentOf
($nodeid). The methods for Tree return TreenodeUnorderedInterface and the methods for TreeOrdered return 
TreenodeOrderedInterface.

SetTreeId will throw an exception if you try to set the treeid on a tree that already has nodes populated (e.g. you 
cannot change the treeid on a tree that has nodes).

public function setTreeId(int $treeid) : void;
public function getTreeId(): int;

public function addNode(TreenodeInterface $node): void;
public function deleteNode(TreenodeInterface $node, bool $deleteBranchOK = false): void;

public function setNodes(array $nodeCollection): void;
public function getNodes(): array;

public function getNode(int $nodeId): ?TreenodeInterface;
public function hasNode(TreenodeUnorderedInterface $node): bool

getNode and hasNode are quite similar, but there is a subtle difference.  The vanilla usage of getNode is to 
retrieve a node with a certain id.  But it can also be used to verify that there is not already a node with a 
certain nodeid as follows: !is_null($tree->getNode($nodeid).  This is different from hasNode, which checks 
to make sure that everything matches via object comparison.  The hasNode method has a $strict parameter which controls 
whether to use object equality (obj1 == obj2) or instance equality (obj1 === obj2).

public function getRoot() : ? TreenodeInterface;

the root of the tree cannot be explicitly set through the public interface. By definition, the root is the (only) 
node that has a null parentid.  It is added to the tree like any other node: through the addNode method or the 
setNodes method.

public function nodeCount(): int;
public function getParentOf(TreenodeInterface $node): ?TreenodeInterface;
public function getChildrenOf(TreenodeInterface $parent): array;
public function getTreeDepthFirst(TreenodeInterface $startNode = null, callable $callback = null): array;
public function getTreeBreadthFirst(TreenodeInterface $startNode = null, callable $callback = null, int $levels = null): array;
public function hasLeafWithId(int $nodeId): bool;
public function getLeaves(): array;
public function hasInteriorNodeWithId(int $nodeId): bool;
public function getInteriorNodes(): array;





