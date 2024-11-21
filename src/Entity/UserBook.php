<?php

namespace App\Entity;

use App\Repository\UserBookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserBookRepository::class)]
class UserBook
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id")]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Book::class)]
    #[ORM\JoinColumn(name: "book_id", referencedColumnName: "id")]
    private ?Book $book = null;

    #[ORM\ManyToOne(targetEntity: UserBookStatus::class)]
    #[ORM\JoinColumn(name: "user_book_status_id", referencedColumnName: "id")]
    private ?UserBookStatus $user_book_status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $added_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getBook(): ?string
    {
        return $this->book;
    }

    public function setBook(string $book): static
    {
        $this->book = $book;

        return $this;
    }

    public function getUserBookStatus(): ?string
    {
        return $this->user_book_status;
    }

    public function setUserBookStatus(string $user_book_status): static
    {
        $this->user_book_status = $user_book_status;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeImmutable
    {
        return $this->added_at;
    }

    public function setAddedAt(\DateTimeImmutable $added_at): static
    {
        $this->added_at = $added_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
