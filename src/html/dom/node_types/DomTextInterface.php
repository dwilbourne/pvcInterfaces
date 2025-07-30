<?php

namespace pvc\interfaces\html\dom\node_types;

use pvc\interfaces\html\content_model\ContentModelInterface;
use pvc\interfaces\html\dom\NodeInterface;
use pvc\interfaces\html\element\TextInterface;

interface DomTextInterface extends NodeInterface, TextInterface, ContentModelInterface
{

}