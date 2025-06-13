<?php

namespace pvc\interfaces\html\content_model;

enum ContentCategory: int
{
    case Interactive = 1;
    case Transparent = 2;
    case Flow = 4;
    case Phrasing = 8;
    case Palpable = 16;
    case Embedded = 32;
    case Heading = 64;
    case Sectioning = 128;
    case Metadata = 256;
}