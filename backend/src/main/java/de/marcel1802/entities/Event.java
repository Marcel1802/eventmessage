package de.marcel1802.entities;

import com.fasterxml.jackson.annotation.JsonFormat;

import io.quarkus.hibernate.orm.panache.PanacheEntityBase;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import java.time.LocalDateTime;

@Entity
@Table(name = "events")
public class Event extends PanacheEntityBase {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int id;

	private String name;

	// Format "yyyy-MM-dd HH:mm:ss.SSSSSS")
	@JsonFormat(shape = JsonFormat.Shape.STRING, pattern = "yyyy-MM-dd HH:mm")
	private LocalDateTime date;

	// TODO: tinyint (2) / `deleted` tinyint(4) DEFAULT NULL / BIT (1) in DB
	private boolean deleted;

	public Event() {
	}

	public Event(String name, LocalDateTime date) {
		this.name = name;
		this.date = date;
		this.deleted = false;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public LocalDateTime getDate() {
		return date;
	}

	public void setDate(LocalDateTime date) {
		this.date = date;
	}

	public boolean isDeleted() {
		return deleted;
	}

	public void setDeleted(boolean deleted) {
		this.deleted = deleted;
	}

	@Override
	public String toString() {
		return "Event{" +
			"id=" + id +
			", name='" + name + '\'' +
			", date=" + date +
			", deleted=" + deleted +
			'}';
	}
}
