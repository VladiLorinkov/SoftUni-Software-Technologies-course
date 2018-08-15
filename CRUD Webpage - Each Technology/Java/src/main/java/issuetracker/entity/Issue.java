package issuetracker.entity;

import javax.persistence.*;

@Entity
@Table(name = "issues")
public class Issue {

   @Id
   @GeneratedValue(strategy = GenerationType.IDENTITY)
   private Integer Id;

   @Column
   private String Title;

   @Column
   private String Content;

   @Column
   private Integer Priority;

   public Issue() {
   }

   public Issue(String title, String content, Integer priority) {
      Title = title;
      Content = content;
      Priority = priority;
   }

   public Integer getId() {
      return Id;
   }

   public void setId(Integer id) {
      Id = id;
   }

   public String getTitle() {
      return Title;
   }

   public void setTitle(String title) {
      Title = title;
   }

   public String getContent() {
      return Content;
   }

   public void setContent(String content) {
      Content = content;
   }

   public Integer getPriority() {
      return Priority;
   }

   public void setPriority(Integer priority) {
      Priority = priority;
   }
}
