<?php

declare(strict_types=1);

namespace Temporal\Interceptor\WorkflowOutboundCalls;

use JetBrains\PhpStorm\Immutable;
use Throwable;

/**
 * @psalm-immutable
 */
#[Immutable]
final class PanicInput
{
    /**
     * @no-named-arguments
     * @internal Don't use the constructor. Use {@see self::with()} instead.
     */
    public function __construct(
        #[Immutable]
        public ?Throwable $failure,
    ) {
    }

    public function withoutFailure(): self
    {
        return new self(
            null,
        );
    }

    public function with(
        ?Throwable $failure = null,
    ): self {
        return new self(
            $failure ?? $this->failure,
        );
    }
}
