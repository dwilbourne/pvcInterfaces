<?php

namespace pvc\interfaces\html\dom\node_types;

enum NodeType: int
{
    case Element = 1;

    case Text = 3;

    case Comment = 8;
}