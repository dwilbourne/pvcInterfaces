<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\interfaces\struct\tree\node;

use pvc\interfaces\struct\collection\IndexedElementInterface;
use pvc\interfaces\struct\tree\dto\TreenodeDtoInterface;

/**
 * Interface TreenodeExtendedInterface adds methods to TreenodeBaseInterface in
 * the following three areas:
 *
 * 1) it provides methods necessary to hydrate itself with nodeid, parentid and
 * optionally a treeid from an external data source.  Once hydrated, it can
 * then be added into the tree.
 *
 * 2) it provides getIndex and setIndex methods which allow you to change the
 * ordinal position of the node among its siblings
 *
 * @see CollectionInterface
 */
interface TreenodeExtendedInterface extends IndexedElementInterface
{
    /**
     * hydration methods
     */

    /**
     * hydrate sets properties in the node using an external data source
     * @param TreenodeDtoInterface $dto
     */
    public function hydrate(TreenodeDtoInterface $dto): void;


    /**
     * @return non-negative-int|null
     * used only in the course of hydrating a tree from an external data source.
     * The tree needs to be able to get the parentId so it can verify that
     * the parent already exists in the tree.
     */
    public function getParentId(): ?int;

    /**
     * indexing methods
     */

    /**
     * @return non-negative-int
     * returns the ordinal position of this node in the parent's child collection
     */
    public function getIndex(): int;

    /**
     * @param  non-negative-int  $index
     *
     * @return void
     */
    public function setIndex(int $index): void;

}
